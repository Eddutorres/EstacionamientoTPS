<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioEstController; // permite acceder a la clase UsuarioEstController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta para acceder a la carpeta usuarioest vista index
/*
Route::get('/usuarioest', function () {
    return view('usuarioest.index');
});

Route::get('usuarioest/crear', [UsuarioEstController::class,'create']);*/

Route::resource('usuarioest',UsuarioEstController::class);  // crea rutas directas a los metodos de la clase