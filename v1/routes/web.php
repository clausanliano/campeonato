<?php

use App\Http\Controllers\AparelhoController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClubeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PermissaoController;
use App\Http\Controllers\TreinadorController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
Route::resource('campeonato', CampeonatoController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('aparelho', AparelhoController::class);
Route::resource('treinador', TreinadorController::class);
