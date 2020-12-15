<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegistroController extends Controller
{
    public function create()
    {
        if (Auth::check()){
            return redirect('/');
        }

        $textoBotao = 'Cadastrar';

        return view('login-cadastro.formulario-login-cadastro', compact('textoBotao'));
    }

    public function store(Request $request)
    {
        if ($request->password !== $request->password2) {
            return redirect('/cadastrar')->with('erro', 'Senhas divergentes');
        }

        /*$request->validate([
           'name' => 'required|string|max:15',
            'lastname' => 'required|string|max:20',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
            'password2' => 'required|string|confirmed|min:6'
        ]);*/

        $foto = null;

        if ($request->hasFile('foto_perfil'))
        {
            $foto = $request->file('foto_perfil')->store('perfil');
        }

        $usuario = User::create([
            'name' => ucfirst($request->name),
            'lastname' => ucfirst($request->lastname),
            'foto_perfil' => $foto,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);


        Auth::login($usuario);

        //event(new Registered($usuario));

        return redirect('/');
    }
}
