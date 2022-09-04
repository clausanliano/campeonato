<?php

use App\Http\Controllers\AtletaController;
use App\Http\Controllers\ClubeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PermissaoController;
use App\Http\Controllers\TreinadorController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('permissao', PermissaoController::class);
Route::resource('perfil', PerfilController::class);
Route::resource('usuario', UsuarioController::class);


Route::resource('clube', ClubeController::class);
Route::resource('atleta', AtletaController::class);
Route::resource('treinador', TreinadorController::class);
