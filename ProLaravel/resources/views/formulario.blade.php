@extends('layouts.plantilla')

@section('titulo','Formulario')

@section('contenido')

<h1 class="display-1 text-center text-secondary"> FORMULARIO </h1>
<div class="container mt-5 col-md-6">

    @if (session()->has('confirmacion'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" width="16px" height="16px" aria-label="Warning:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <strong> {{ session('confirmacion') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" width="16px" height="16px" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <strong> {{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif

    <div class="card">
        <div class="card-header fs-3 fw-medium text-primary text-center">
            Introduce aqui tus memorias
        </div>
        <div class="card-body">
            <form method="POST" action="/guardarRecuerdo">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Titulo: </label>
                    <input type="text" name="txtTitulo"  class="form-control" value="{{ old('txtTitulo')}}">
                    <p class="fw-bold text-danger"> {{ $errors->first('txtTitulo') }} </p>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Recuerdo: </label>
                    <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo')}}">
                    <p class="fw-bold text-danger"> {{ $errors->first('txtRecuerdo') }} </p>
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

