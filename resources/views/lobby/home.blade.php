@extends('layout')


@section('titulo')
    UTube
@endsection

@section('conteudo')

    <div class="row row-cols-1 row-cols-md-4 g-4 mt-4 mb-4">

        @foreach($videos as $video)

        <div class="col">
            <div class="card h-51 shadow" style="text-align: justify">
                <a href="/assistir?v={{$video->id}}"><img src="{{$video->getCapa()}}" class="card-img-top" alt="..." width="320px" height="180px"></a>
                <div class="card-body border-dark">
                    <a href="" style="text-decoration: none; color: black"><h5 class="card-title">{{$video->nome}}</h5></a>
                    <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                </div>
                <div class="card-footer">
                    <small class="text-muted">Enviado por: {{$video->user_id}}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

@endsection

