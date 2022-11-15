@extends('layouts.base')

@section('title','providers')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
    <h3>Proveedores</h3>
    <a class="btn btn-sm btn-outline-primary" href="{{route('providers.create')}}">Nuevo proveedor</a>

    @empty($providers)
        <h3>No hay comentarios para mostrar</h3>
    @endempty

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($providers as $provider)
                    <tr>
                        <td>{{$provider->name}}</td>
                        <td>{{$provider->phone}}</td>
                        <td>
                            <form action="{{route('providers.destroy',$provider->id)}}" method="POST" class="float-left">
                                @csrf
                                @method('delete')
                                <a type="button" class="btn btn-sm btn-outline-secondary float-left" href="{{route('providers.edit',$provider->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>
                                <button type="submit" class="btn btn-sm btn-outline-secondary float-left" ><i class="fa-regular fa-trash-can"></i></button>
                                <a type="button" class="btn btn-sm btn-outline-secondary float-left" href="{{route('providers.show',$provider->id)}}"><i class="fa-solid fa-circle-info"></i></a>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
              </table>


@endsection
