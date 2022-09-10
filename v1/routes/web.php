<?php

use App\Http\Controllers\AparelhoController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClubeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PermissaoController;
use App\Http\Controllers\ProvaController;
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


Route::get('prova/{campeonato}', [ProvaController::class, 'index'])->name('prova.index');
Route::get('prova/{campeonato}/create', [ProvaController::class, 'create'])->name('prova.create');
Route::post('prova/{campeonato}', [ProvaController::class, 'store'])->name('prova.store');
Route::get('prova/{campeonato}/{prova}', [ProvaController::class, 'show'])->name('prova.show');
Route::get('prova/{campeonato}/{prova}/edit', [ProvaController::class, 'edit'])->name('prova.edit');
Route::put('prova/{prova}', [ProvaController::class, 'update'])->name('prova.update');
Route::delete('prova/{prova}', [ProvaController::class, 'destroy'])->name('prova.destroy');
