@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
    <h3>Detalles del proveedor</h3>
    <h4>{{$provider->name}}</h4>
    <p>{{$provider->phone}}</p>
    <p>{{$provider->email}}</p>
    <p><strong>Ingredientes suministrados:</strong></p>
    <ul>
        @foreach ($provider->ingredients as $ingredient)
            <li>{{$ingredient->name}}</li>
        @endforeach
    <ul>





@endsection
