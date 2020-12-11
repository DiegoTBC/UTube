@extends('layout')

@section('titulo')
    {{$textoPesquisado}} - UTube
@endsection

@section('conteudo')

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 mb-4">

        <div class="col">
            <div class="card h-51 shadow"  style="text-align: justify">
                <a href="/assistir/"><img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body border-dark">
                    <a href="" style="text-decoration: none; color: black"><h5 class="card-title">{{$tituloVideo}}</h5></a>
                    <p class="card-text">{{$descricaoVideo}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Enviado por: {{$nomeAutor}}</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-51 shadow">
                <a href="/assistir/"><img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body border-dark">
                    <a href="" style="text-decoration: none; color: black"><h5 class="card-title" style="text-align: justify-all">{{$tituloVideo}}</h5></a>
                    <p class="card-text" >{{$descricaoVideo}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Enviado por: {{$nomeAutor}}</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-51 shadow">
                <a href="/assistir/"><img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body border-dark">
                    <a href="" style="text-decoration: none; color: black"><h5 class="card-title" style="text-align: justify-all">{{$tituloVideo}}</h5></a>
                    <p class="card-text" >{{$descricaoVideo}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Enviado por: {{$nomeAutor}}</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-51 shadow">
                <a href="/assistir/"><img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body border-dark">
                    <a href="" style="text-decoration: none; color: black"><h5 class="card-title" style="text-align: justify-all">{{$tituloVideo}}</h5></a>
                    <p class="card-text" >{{$descricaoVideo}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Enviado por: {{$nomeAutor}}</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-51 shadow">
                <a href="/assistir/"><img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body border-dark">
                    <a href="" style="text-decoration: none; color: black"><h5 class="card-title" style="text-align: justify-all">{{$tituloVideo}}</h5></a>
                    <p class="card-text" >{{$descricaoVideo}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Enviado por: {{$nomeAutor}}</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-51 shadow">
                <a href="/assistir/"><img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body border-dark">
                    <a href="" style="text-decoration: none; color: black"><h5 class="card-title" style="text-align: justify-all">{{$tituloVideo}}</h5></a>
                    <p class="card-text" >{{$descricaoVideo}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Enviado por: {{$nomeAutor}}</small>
                </div>
            </div>
        </div>


    </div>






@endsection
