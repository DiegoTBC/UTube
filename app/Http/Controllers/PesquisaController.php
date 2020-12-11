<?php

namespace App\Http\Controllers;

use App\Services\LimitadorDeCaracteres;
use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    public function index(Request $request)
    {


        $tituloVideo = LimitadorDeCaracteres::limitaCaracteres('Titulo do video é grande para um caralho fsf afsa fdf', 50);
        $descriçãoVideo = LimitadorDeCaracteres::limitaCaracteres('Descrição ta grande pra caramba uai oras bolas fdsfsdfsd fsdfsdfsd fsdfsdfds', 70);
        $nomeAutor = LimitadorDeCaracteres::limitaCaracteres('Diego Torres',  20);

        $textoPesquisado = $request->pesquisa;

        return view('lobby.tela-resultados-pesquisa', ['textoPesquisado' => $textoPesquisado, 'tituloVideo'=> $tituloVideo, 'descricaoVideo' => $descriçãoVideo, 'nomeAutor' => $nomeAutor]);
    }
}
