<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaControl;

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

Route::get('/', [BibliotecaControl::class,'metodoPrincipal'])->name('paginaPrincipal');
Route::get('/regi', [BibliotecaControl::class,'metodoRegistro'])->name('registroLibro');

Route::post('/guardarLibro',[BibliotecaControl::class,'guardarLibro'])->name('guardar');