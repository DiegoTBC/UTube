<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilUsuarioController extends Controller
{
    public function index()
    {

        $nomeUsuario = Auth::user()->name;
        $nomeUsuario .= " " . Auth::user()->lastname;

        return view('perfil.tela-perfil', compact('nomeUsuario'));
    }
}
