@extends('layouts.base')

@section('title','Comments')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">    
@endsection

@section('content')
<div class="container">
    <h3>Crear Proveedor</h3>
    <form method="POST" action="{{route('providers.store')}}">
        @csrf
        <div class="form-group">
          <label for="title">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="Nombre" placeholder="Nombre" value="{{old('name')}}">
          @error('name')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="Dirección" placeholder="Dirección" value="{{old('address')}}">
            @error('address')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror            
        </div>

        <div class="form-group">
          <label for="text">Teléfono</label>
          <input type="text" class="form-control" id="phone" name="phone" aria-describedby="Teléfono" placeholder="Teléfono" value="{{old('phone')}}">
          @error('phone')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror            
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" aria-describedby="Email" placeholder="Email" value="{{old('email')}}">
          @error('email')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror            
        </div>


        <button type="submit" class="btn btn-sm btn-primary mt-2">Guardar</button>
      </form>
</div>
@endsection
