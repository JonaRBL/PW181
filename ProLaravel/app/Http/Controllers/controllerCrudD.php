<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class controllerCrudD extends Controller
{
    public function inicio()
    {
        return view('welcome');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consR= DB::table('tb_recuerdos')->get();

        return view('recuerdos',compact('consR'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormRecuerdos $request)
    {
        DB::table('tb_recuerdos')->insert([
            "titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "fecha" => Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()

        ]);

        return redirect('/recuerdo/create')->with('confirmacion','Tu recuerdo se guardo correctamente en la BD');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorFormRecuerdos $request, string $id)
    {
        DB::table('tb_recuerdos')->where('id',$id)->update([
            "titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('/recuerdo')->with('confirmacion','Tu recuerdo se modifico correctamente en la BD');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_recuerdos')->where('id',$id)->delete();

        return redirect('/recuerdo')->with('confirmacion2','Tu recuerdo se elimino correctamente en la BD');
    }
}
