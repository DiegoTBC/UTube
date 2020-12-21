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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'create']);

Route::get('/resultados', [\App\Http\Controllers\PesquisaController::class, 'index']);

Route::get('/entrar', [\App\Http\Controllers\SessaoController::class, 'create'])->name('entrar');
Route::post('/entrar', [\App\Http\Controllers\SessaoController::class, 'store']);
Route::get('/sair', [\App\Http\Controllers\SessaoController::class, 'destroy'])->middleware('auth');

Route::get('/cadastrar', [\App\Http\Controllers\RegistroController::class, 'create']);
Route::post('/cadastrar', [\App\Http\Controllers\RegistroController::class, 'store']);

Route::get('/assistir', [\App\Http\Controllers\AssistirVideoController::class, 'index']);
Route::get('/perfil', [\App\Http\Controllers\PerfilUsuarioController::class, 'index'])->middleware('auth');
Route::post('/perfil/{id}/editaNome', [\App\Http\Controllers\PerfilUsuarioController::class, 'editaNome'])->middleware('auth');

Route::get('/enviar-video', [\App\Http\Controllers\VideoController::class, 'index'])->middleware('auth');
Route::post('/enviar-video', [\App\Http\Controllers\VideoController::class, 'store'])->middleware('auth');
Route::delete('/video/{id}', [\App\Http\Controllers\VideoController::class, 'destroy'])->middleware('auth');
Route::post('/video/{id}/editaNome', [\App\Http\Controllers\VideoController::class, 'editaNome'])->middleware('auth');



//require __DIR__.'/auth.php';
