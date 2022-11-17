@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
    <h3>Detalles del ingrediente</h3>
    <h4>{{$ingredient->name}}</h4>
    <p>{{$ingredient->desc}}</p>
    <p><strong>Proveedor:</strong> {{$ingredient->provider->name}}</p>
    <p><strong>Productos que contienen este ingrediente:</strong></p>
    <ul>
        @foreach ($ingredient->products as $product)
            <li>{{$product->name}}</li>
        @endforeach
    <ul>





@endsection
