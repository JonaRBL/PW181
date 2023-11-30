@extends('layouts.plantilla')

@section('titulo','Recuerdos')

@section('contenido')


<h1 class="display-1 text-center text-primary"> RECUERDOS </h1>

<div class="container" style="max-width: 500px">
    @if (session()->has('confirmacion'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" width="16px" height="16px" aria-label="Warning:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <strong> {{ session('confirmacion') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('confirmacion2'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" width="16px" height="16px" aria-label="Warning:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <strong> {{ session('confirmacion2') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @foreach ($consR as $item)
        <div class="card w-100 mt-3 mx-auto">
            <div class="card-body">
                <h3 class="card-title fw-bold">{{$item->titulo}}</h3>
                <p class="card-title fw-medium">{{$item->fecha}}</p>
                <p class="card-tex fw-lighter">{{$item->recuerdo}}</p>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Editar{{$item->id}}">Editar</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Eliminar{{$item->id}}">Borrar</button>
            </div>
        </div>
        @include('partials.modal')
    @endforeach
</div>



@endsection
