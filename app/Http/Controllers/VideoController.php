<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Services\RemovedorDeVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index()
    {
        return view('video.tela-enviar-video');
    }

    public function store(Request $request)
    {

        $usuario = Auth::user();

        $capa = null;
        $video = null;
        if ($request->hasFile('arquivo-imagem'))
        {
            $capa = $request->file('arquivo-imagem')->store('capa');
        }

        if ($request->hasFile('arquivo-video'))
        {
            $video = $request->file('arquivo-video')->store('videos');
        }

        DB::transaction(function () use($capa, $video, $request, $usuario) {
            $usuario->videos()->create([
                'nome' => filter_var(ucfirst($request->nomeVideo), FILTER_SANITIZE_STRING),
                'descricao' => filter_var(ucfirst($request->descricaoVideo), FILTER_SANITIZE_STRING),
                'capa' => $capa,
                'video' => $video
            ]);
        });

        return redirect('/perfil');
    }

    public function destroy(Request $request, RemovedorDeVideo $removedorDeVideo)
    {
        $removedorDeVideo->removerVideo($request->id);
        return redirect('/perfil');
    }

    public function editaNome(int $id, Request $request)
    {
        $novoNome = $request->nome;
        $video = Video::find($id);
        $video->nome = $novoNome;
        $video->save();

    }
}
