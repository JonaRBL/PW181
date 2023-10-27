<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarRegistroLibro;

class BibliotecaControl extends Controller
{
    public function metodoPrincipal(){
        return view ('principal');
    }
    public function metodoRegistro(){
        return view ('registro');
    }
    public function guardarLibro(validarRegistroLibro $req){

        $nombreLibro = $req->input('txtTitulo');

        return redirect('/regi')->with('mensaje', 'Libro "' . $nombreLibro . '" guardado');
        
        
    }
}
