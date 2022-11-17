@extends('layouts.base')

@section('title','Comments')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
<div class="container">
    <h3>Modificar Ingrediente</h3>
    <form method="POST" action="{{route('ingredients.update',$ingredient->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="title">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="Nombre" placeholder="Nombre" value="{{$ingredient->name}}">
          @error('name')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="desc">Descripción</label>
            <input type="text" class="form-control" id="desc" name="desc" aria-describedby="Dirección" placeholder="Dirección" value="{{$ingredient->desc}}">
            @error('desc')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="provider_id">Proveedor</label>
        <select id="provider_id" name="provider_id" class="form-select " required="required" va>
            <option value="">-- Seleccione un Proveedor --</option>
              @foreach ($providers as $provider)
            <option value="{{ $provider->id }}" {{$provider->id == $ingredient->provider_id ? "selected" : "" }}>{{ $provider->name }}</option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-sm btn-primary mt-2">Guardar</button>
      </form>
</div>
@endsection
