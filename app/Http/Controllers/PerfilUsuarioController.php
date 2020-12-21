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

        $videos = Auth::user()->videos()->get();

        return view('perfil.tela-perfil', compact('nomeUsuario', 'videos'));
    }

    public function editaNome(int $id, Request $request)
    {
        $usuario = User::find($id);
        $nome = $request->name;
        $sobrenome = $request->lastname;
        $usuario->name = ucfirst($nome);
        $usuario->lastname = ucfirst($sobrenome);
        $usuario->save();
    }
}
