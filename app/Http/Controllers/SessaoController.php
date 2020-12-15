<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessaoController extends Controller
{
    public function create()
    {
        if (Auth::check()){
            return redirect('/');
        }

        $textoBotao = 'Entrar';

        return view('login-cadastro.formulario-login-cadastro', compact('textoBotao'));
    }

    public function store(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->with('erro', 'Dados de login não estão corretos');

    }

    public function destroy(Request $request)
    {
        \Illuminate\Support\Facades\Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
