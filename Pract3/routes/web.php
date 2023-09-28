<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//rutas tipo view
Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/form', 'formulario')->name('apodoFormulario');
Route::view('/recuerdos', 'recuerdos')->name('apodoRecuerdos');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/form', function () {
//     return view('formulario');
// });
// Route::get('/recuerdos', function () {
//     return view('recuerdos');
// });


