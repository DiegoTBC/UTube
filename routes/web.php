<?php

use App\Http\Controllers\EntrarController;
use App\Http\Controllers\PerfilUsuarioController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\RegistroController;
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

Route::view('/', 'lobby.home');

Route::get('/entrar', [EntrarController::class, 'index']);
Route::get('/cadastrar', [RegistroController::class, 'index']);
Route::get('/resultados', [PesquisaController::class, 'index']);
Route::get('/perfil', [PerfilUsuarioController::class, 'index']);
Route::get('/assistir');
