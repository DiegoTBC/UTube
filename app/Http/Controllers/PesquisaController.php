<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Services\LimitadorDeCaracteres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesquisaController extends Controller
{
    public function index(Request $request)
    {
        $pesquisa = $request->pesquisa;
        $videos = Video::query()->where('nome', 'LIKE', '' . $pesquisa . '%')
            ->orWhere('nome', 'LIKE', '%' . $pesquisa . '%')
            ->orWhere('nome', 'LIKE', '%' . $pesquisa . '')->get();

        //$tituloVideo = LimitadorDeCaracteres::limitaCaracteres('Titulo do video é grande para um caralho fsf afsa fdf', 50);
        //$descricaoVideo = LimitadorDeCaracteres::limitaCaracteres('Descrição ta grande pra caramba uai oras bolas fdsfsdfsd fsdfsdfsd fsdfsdfds', 70);
        //$nomeAutor = LimitadorDeCaracteres::limitaCaracteres('Diego Torres',  20);

        $textoPesquisado = $request->pesquisa;

        return view('lobby.tela-resultados-pesquisa', compact('textoPesquisado', 'videos'));
    }
}
