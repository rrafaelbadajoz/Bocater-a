@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
<div class="container">
    <h3>Crear Ingrediente</h3>
    <form method="POST" action="{{route('ingredients.store')}}">
        @csrf
        <div class="form-group">
          <label for="title">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="Nombre" placeholder="Nombre" value="{{old('name')}}">
          @error('name')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="desc">Descripción</label>
            <input type="text" class="form-control" id="desc" name="desc" aria-describedby="Descripción" placeholder="Descripción" value="{{old('desc')}}">
            @error('desc')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="provider_id">Proveedor</label>
        <select id="provider_id" name="provider_id" class="form-select " required="required">
            <option value="">-- Seleccione un Proveedor --</option>
              @foreach ($providers as $provider)
            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-sm btn-primary mt-2">Guardar</button>
      </form>
</div>
@endsection
