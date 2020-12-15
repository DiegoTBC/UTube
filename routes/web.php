<?php

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
    return view('lobby.home');
});

Route::get('/resultados', [\App\Http\Controllers\PesquisaController::class, 'index']);

Route::get('/entrar', [\App\Http\Controllers\SessaoController::class, 'create'])->name('entrar');
Route::post('/entrar', [\App\Http\Controllers\SessaoController::class, 'store']);
Route::get('/sair', [\App\Http\Controllers\SessaoController::class, 'destroy'])->middleware('auth');

Route::get('/cadastrar', [\App\Http\Controllers\RegistroController::class, 'create']);
Route::post('/cadastrar', [\App\Http\Controllers\RegistroController::class, 'store']);

Route::get('/assistir', [\App\Http\Controllers\AssistirVideoController::class, 'index']);
Route::get('/perfil', [\App\Http\Controllers\PerfilUsuarioController::class, 'index'])->middleware('auth');

Route::get('/enviar-video', [\App\Http\Controllers\EnviarVideoController::class, 'index'])->middleware('auth');


//require __DIR__.'/auth.php';
