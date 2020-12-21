<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class AssistirVideoController extends Controller
{
    public function index(Request $request)
    {
        if (!filter_var($request->v, FILTER_VALIDATE_INT))
        {
           return redirect('/', 302);
        }

        $video = Video::find($request->v);

        if (!isset($video))
        {
            abort(404);
        }

        return view('video.tela-assistir', compact('video'));

    }
}
