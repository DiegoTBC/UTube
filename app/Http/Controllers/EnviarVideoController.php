<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnviarVideoController extends Controller
{
    public function index()
    {


        return view('video.tela-enviar-video');
    }
}
