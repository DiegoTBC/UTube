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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/assistir', [\App\Http\Controllers\AssistirVideoController::class, 'index']);
Route::get('/perfil', [\App\Http\Controllers\PerfilUsuarioController::class, 'index']);
Route::get('/entrar', [\App\Http\Controllers\EntrarController::class, 'index']);
Route::get('/cadastrar', [\App\Http\Controllers\RegistroController::class, 'index']);
Route::get('/enviar-video', [\App\Http\Controllers\EnviarVideoController::class, 'index']);

require __DIR__.'/auth.php';
