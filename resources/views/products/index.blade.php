@extends('layouts.base')

@section('title','Comments')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
    <h3>Productos</h3>
    <a class="btn btn-sm btn-outline-primary" href="{{route('products.create')}}">Nuevo producto</a>

    @empty($products)
        <h3>No hay productos para mostrar</h3>
    @endempty

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="width:130px">Img</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col" style="width:120px">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            @if (empty($product->file_path))
                @php $img_path='/assets/img/image-placeholder.jpg'; @endphp
            @else
                @php $img_path = Storage::url($product->file_path); @endphp
            @endif


            <tr>
                <td><img src="{{ $img_path }}" class="img-thumbnail" style="max-width:120px" alt="{{ $product->name }}"></td>
                <td>
                    <div class="fw-bold">{{$product->name}}</div>
                    <div class="fw-light fst-italic">{{$product->short}}</div>
                    <div class="text-secondary small">{{$product->ingredients->pluck('name')->join(', ');}}</div>
                </td>
                <td>{{$product->price}}</td>
                <td>
                    <form action="{{route('products.destroy',$product->id)}}" method="POST" class="float-left">
                        @csrf
                        @method('delete')
                        <a type="button" class="btn btn-sm btn-outline-secondary float-left" href="{{route('products.edit',$product->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <button type="submit" class="btn btn-sm btn-outline-secondary float-left" ><i class="fa-regular fa-trash-can"></i></button>
<!--                    <a type="button" class="btn btn-sm btn-outline-secondary float-left" href="{{route('products.show',$product->id)}}"><i class="fa-solid fa-circle-info"></i></a> -->
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
      </table>


@endsection
