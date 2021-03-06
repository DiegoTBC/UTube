@extends('layout')

@section('titulo')
    Nome do Video - UTube
@endsection

@section('estilos')
    <style>
        .box {
            width: 80%;
            height: 80vh;

        }

        .video {
            width: 100%;
            height: 85%;
        }

        .info {
            width: 100%;
            height: 15%;
        }

    </style>
@endsection

@section('conteudo')
    <div class="container box mt-3 shadow">
        <div class="video">
            <video src="{{$video->getVideo()}}" width="100%" height="100%" controls></video>

        </div>
        <div class="info">
            <div class="titulo mt-2"><h2 class="justify">{{$video->nome}}</h2></div>
            <div class="descricao mb-2">{{$video->descricao}}</div>
        </div>
    </div>

@endsection
