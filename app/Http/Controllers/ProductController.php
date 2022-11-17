<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Ingredient;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name')->get();
        //dd($products);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::all(); //Obtenemos el listado de ingredientes. Lo necesitaremos para crear el desplegable que nos permita seleccionar ingredientes
        return view('products.create',compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //El modelo Product es algo más complejo, ya que tiene tablas relacionadas (ingredientes) y también incluye un archivo de tipo imagen del producto
        //Por lo tanto, no podemos guardar diréctamente todos los campos. Hay que
        $product = new Product;

        //Leemos los datos de tipo texto
        $product->name = $request->name;
        $product->short = $request->short;
        $product->desc = $request->desc;
        $product->price = $request->price;

        //Comprobamos si llega algo de tipo "file" con el nombre de campo "img"
        if (!empty($request->file('img'))){
            //Obtenemos el nombre original del archivo y lo asignamos al atributo "file_name" del objeto que estamos creando
            $product->file_name = $request->file('img')->getClientOriginalName();
            //Almacenamos el fichero con al método "store". Creará un nombre de archivo aleatorio y dicho nombre lo asignamos al atributo "file_path" de nuestro objeto
            $product->file_path = $request->file('img')->store('public/files');
        }
        $product->save(); //Almacenamos el objeto en la tabla "products"

        //Comprobamos si hemos seleccionado algún ingrediente
        if (!empty($request->ingredients))
            $product->ingredients()->attach($request->ingredients); //Añadimos los elementos de la relación n:n

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $ingredients = Ingredient::all();
        return view('products.edit',compact('product','ingredients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->short = $request->short;
        $product->desc = $request->desc;
        $product->price = $request->price;

        if (!empty($request->file('img'))){
            $product->file_name = $request->file('img')->getClientOriginalName();;
            $product->file_path = $request->file('img')->store('public/files');
        }
        $product->save();

        //Añadimos los elementos de la relación n:n
        //El método "sync" se encarga de eliminar del modelo los registros que no hemos seleccionar e insertar los nuevos
        $product->ingredients()->sync($request->ingredients);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
