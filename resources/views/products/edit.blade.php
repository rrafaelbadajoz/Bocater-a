@extends('layouts.base')

@section('title','Comments')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
<div class="container">
    <h3>Crear Producto</h3>
    <form method="POST" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-4">
                <img src="{{ Storage::url($product->file_path); }}" class="img-thumbnail"  alt="{{ $product->name }}">
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="Nombre" placeholder="Nombre" value="{{$product->name}}">
                    @error('name')
                      <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror

                  </div>
                  <div class="form-group">
                      <label for="short">Descripción corta</label>
                      <input type="text" class="form-control" id="short" name="short" aria-describedby="short" placeholder="short" value="{{$product->short}}">
                      @error('short')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                    <label for="desc">Descripción</label>
                    <input type="text" class="form-control" id="desc" name="desc" aria-describedby="desc" placeholder="desc" value="{{$product->desc}}">
                    @error('desc')
                      <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="text" class="form-control" id="price" name="price" aria-describedby="price" placeholder="price" value="{{$product->price}}">
                    @error('price')
                      <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="form-group mt-1">
                    <label for="img">Imagen</label>

                    <input type="file" name="img" id="img" placeholder="Upload image">
                    @error('img')
                      <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror
                  </div>

            </div>
        </div>




        <div class="form-group">
            <div class="mt-2 fw-bold">Ingredientes</div>
                @foreach ($ingredients as $ingredient)
                    {{$checked=''}}
                    @foreach ($product->ingredients as $product_ingredient)
                        @if ($ingredient->id == $product_ingredient->id)
                            @php $checked = " checked"; @endphp
                        @endif

                    @endforeach
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="ingredients[]" id="ingrediente_{{$ingredient->id}}"  value="{{$ingredient->id}}" {{$checked}}>
                        <label class="form-check-label" for="ingrediente_{{$ingredient->id}}">{{$ingredient->name}}</label>
                    </div>

                @endforeach
        </div>

        <button type="submit" class="btn btn-sm btn-primary mt-2">Enviar</button>
      </form>
</div>
@endsection
