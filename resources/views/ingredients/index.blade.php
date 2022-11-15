@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
    <h3>Ingredientes</h3>
    <a class="btn btn-sm btn-outline-primary" href="{{route('ingredients.create')}}">Nuevo ingrediente</a>

    @empty($ingredients)
        <h5>No hay ingredientes para mostrar</h5>
    @endempty

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($ingredients as $ingredient)
            <tr>
                <td>{{$ingredient->name}}</td>
                <td>{{$ingredient->desc}}</td>
                <td>{{$ingredient->provider->name}}</td>
                <td>
                    <form action="{{route('ingredients.destroy',$ingredient->id)}}" method="POST" class="float-left">
                        @csrf
                        @method('delete')
                        <a type="button" class="btn btn-sm btn-outline-secondary float-left" href="{{route('ingredients.edit',$ingredient->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <button type="submit" class="btn btn-sm btn-outline-secondary float-left" ><i class="fa-regular fa-trash-can"></i></button>
                        <a type="button" class="btn btn-sm btn-outline-secondary float-left" href="{{route('ingredients.show',$ingredient->id)}}"><i class="fa-solid fa-circle-info"></i></a>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
      </table>



@endsection
