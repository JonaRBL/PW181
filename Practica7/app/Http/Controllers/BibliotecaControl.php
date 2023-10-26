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

        /* $validated = $req->validate([
            'txtISBN' => 'required|numeric|digits_between:1,13',
            'txtPaginas' => 'required|numeric',
            'txtEmail' => 'required|email'
        ]); */

        $name = $req->input('txtTitulo');

        return redirect('/regi')->with('confirmacion','Todo correcto: Libro "'.$name.'" guardado');
        
    }
}
