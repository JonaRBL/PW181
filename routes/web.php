<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\controllerCrudD;

//rutas controlador controllerCrudD
Route::get('/', [controllerCrudD::class, 'inicio'])->name('recuerdo.inicio');

Route::get('/recuerdo/create', [controllerCrudD::class,'create'])->name('recuerdo.create');

Route::post('/recuerdo',[controllerCrudD::class,'store'])->name('recuerdo.store');

Route::get('/recuerdo', [controllerCrudD::class,'index'])->name('recuerdo.index');

Route::put('/recuerdo/{id}/confirm',[controllerCrudD::class,'update'])->name('recuerdo.update');

Route::put('/recuerdo/{id}/delete',[controllerCrudD::class,'destroy'])->name('recuerdo.destroy');

//Rutas individuales diariocontroller
//Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');
//Route::get('/form',[diarioController::class,'metodoFormulario'])->name('apodoFormulario');
//Route::get('/recuerdos',[diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');

//Route::post('/guardarRecuerdo',[diarioController::class,'guardarRecuerdo'])->name('guardar');

//Rutas agrupadas por controlador
// Route::controller(diarioController::class)->group(function(){
//     Route::get('/','metodoInicio')->name('apodoInicio');
//     Route::get('/form','metodoFormulario')->name('apodoFormulario');
//     Route::get('/recuerdos','metodoRecuerdos')->name('apodoRecuerdos');
// });

// Route::get('/', function () {
//     return view('welcome');
// });


