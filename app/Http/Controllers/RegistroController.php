<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(Request $request)
    {

        $textoBotao = 'Cadastrar';

        return view('login-cadastro.formulario-login-cadastro', compact('textoBotao'));
    }
}
