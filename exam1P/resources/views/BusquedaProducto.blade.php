@extends('layouts.plantilla')

@section('titulo','Login')

@section('contenido')
    <h2 class="text-center text-primary fs-1">Busqueda de producto</h2>
    <form class="text-center">
        <label>Ingrese el producto:</label>
        <input type="text"><br><br>
        
        <a href="#">
            <button type="button" class="btn btn-primary">Buscar Producto</button>
        </a>
    </form>

@include('partials.card')

@endsection