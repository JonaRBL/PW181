@extends('layouts.plantilla')

@section('titulo','Registro')

@section('contenido')
<div class="container mb-4">
    @if (session()->has('mensaje'))
        <script>
        Swal.fire(
          'Todo Correcto',
          '{!! session('mensaje') !!}',
          'success'
        ) 
      </script>
    @endif

    @if($errors->any())

        
            
            <script>
            Swal.fire(
                'Falta diligenciar correctamente algunos campos...',
                '{{$errors->first()}}',
                'warning'
            )
            </script>

        

    @endif
    <form method="POST" action="/guardarLibro" class="row g-4 mt-4" >
        @csrf
        <div class="col-md-2">
            <label class="form-label">ISBN</label>
            <input type="text" class="form-control" name="txtISBN" value="{{ old('txtISBN')}}">
            <p class="fw-bold text-danger"> {{ $errors->first('txtISBN') }} </p>
        </div>
        <div class="col-md-5">
            <label class="form-label">Titulo</label>
            <input type="text" class="form-control" name="txtTitulo" value="{{ old('txtTitulo')}}">
            <p class="fw-bold text-danger"> {{ $errors->first('txtTitulo') }} </p>
        </div>
        <div class="col-md-5">
            <label class="form-label">Autor</label>
            <input type="text" class="form-control" name="txtAutor" value="{{ old('txtAutor')}}">
            <p class="fw-bold text-danger"> {{ $errors->first('txtAutor') }} </p>
        </div>
        <div class="col-md-1">
            <label class="form-label">Páginas</label>
            <input type="text" class="form-control" name="txtPaginas" value="{{ old('txtPaginas')}}">
            <p class="fw-bold text-danger"> {{ $errors->first('txtPaginas') }} </p>
        </div>
        <div class="col-md-5">
            <label class="form-label">Editorial</label>
            <input type="text" class="form-control" name="txtEditorial" value="{{ old('txtEditorial')}}">
            <p class="fw-bold text-danger"> {{ $errors->first('txtEditorial') }} </p>
        </div>
        <div class="col-md-6">
            <label class="form-label">Email de editorial</label>
            <input type="text" class="form-control" name="txtEmail" value="{{ old('txtEmail')}}">
            <p class="fw-bold text-danger"> {{ $errors->first('txtEmail') }} </p>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar registro</button>
        </div>
    </form>
</div>
@endsection