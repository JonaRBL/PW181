@extends('layouts.plantilla')

@section('titulo','Formulario')

@section('contenido')

<h1 class="display-1 text-center text-secondary"> FORMULARIO </h1>
<div class="container mt-5 col-md-6">
    <div class="card">
        <div class="card-header fs-3 fw-medium text-primary text-center">
            Introduce aqui tus memorias
        </div>
        <div class="card-body">
            <form method="POST" action="/guardarRecuerdo">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Titulo: </label>
                    <input type="text" name="txtTitulo"  class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Recuerdo: </label>
                    <input type="text" name="txtRecuerdo" class="form-control">
                </div>
                
        </div>
        <div class="card-footer text-body-secondary">
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-secondary">Guardar recuerdo </button>
        </form>
        </div>
    </div> <!-- div de la tarjeta -->
</div><!-- div del contenedor -->

@endsection

