<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrarController extends Controller
{
    public function index(Request $request)
    {
        $textoBotao = 'Entrar';

        return view('login-cadastro.formulario-login-cadastro', compact('textoBotao'));
    }
}
