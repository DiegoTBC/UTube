@extends('layout')

@section('titulo')
    {{$pesquisa}} - UTube
@endsection

@section('conteudo')

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 mb-4">

        @foreach($videos as $video)

        <div class="col">
            <div class="card h-51 shadow"  style="text-align: justify">
                <a href="/assistir?v={{$video->id}}"><img src="{{$video->getCapa()}}" class="card-img-top" alt="..." width="320px" height="200px"></a>
                <div class="card-body border-dark">
                    <a href="" style="text-decoration: none; color: black"><h5 class="card-title">{{$video->nome}}</h5></a>
                    <p class="card-text">{{$video->descricao}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Enviado por: {{$video->user->name}} {{$video->user->lastname}}</small>
                </div>
            </div>
        </div>

        @endforeach

    </div>

@endsection
