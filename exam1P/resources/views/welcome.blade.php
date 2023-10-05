@extends('layouts.plantilla')

@section('titulo','Login')

@section('contenido')
    <h2 class="display-1 text-center text-primary fs-1">Login</h1>
    
    <form class="text-center">
        <label>Usuario:</label>
        <input type="text"><br><br>
        
        <label>Contraseña:</label>
        <input type="password"><br><br>
        
        <a href="#">
            <button type="button" class="btn btn-primary">Iniciar Sesion</button>
        </a>
    </form> 
@endsection
