<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

//Rutas individuales
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');
Route::get('/form',[diarioController::class,'metodoFormulario'])->name('apodoFormulario');
Route::get('/recuerdos',[diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');

Route::post('/guardarRecuerdo',[diarioController::class,'guardarRecuerdo'])->name('guardar');

//Rutas agrupadas por controlador
// Route::controller(diarioController::class)->group(function(){
//     Route::get('/','metodoInicio')->name('apodoInicio');
//     Route::get('/form','metodoFormulario')->name('apodoFormulario');
//     Route::get('/recuerdos','metodoRecuerdos')->name('apodoRecuerdos');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/form', function () {
//     return view('formulario');
// });
// Route::get('/recuerdos', function () {
//     return view('recuerdos');
// });


