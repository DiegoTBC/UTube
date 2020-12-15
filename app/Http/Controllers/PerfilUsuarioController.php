<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PerfilUsuarioController extends Controller
{
    public function index()
    {

        $nomeUsuario = Auth::user()->name;
        $nomeUsuario .= " " . Auth::user()->lastname;

        $videos = Auth::user()->videos()->get();

        return view('perfil.tela-perfil', compact('nomeUsuario', 'videos'));
    }
}
