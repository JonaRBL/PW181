<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function guardar(Request $req){
        $validated = $req->validate(
            [
                'txtNombre' => 'required|min:5',
                'txtFecha' => 'required|date',
                'txtVendido' => 'required|numeric|max:10000000'
            ]
            );
            

        return redirect('/')->with('mensaje','Video Juego registrado correctamente');
    }   
    
}
