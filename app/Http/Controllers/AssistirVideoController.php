<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class AssistirVideoController extends Controller
{
    public function index(Request $request)
    {

        $video = Video::find($request->v);

        return view('video.tela-assistir', compact('video'));
    }
}
