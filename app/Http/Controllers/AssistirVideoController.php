<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistirVideoController extends Controller
{
    public function index(Request $request)
    {


        return view('video.tela-assistir');
    }
}
