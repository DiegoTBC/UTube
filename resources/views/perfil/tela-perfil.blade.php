@extends('layout')

@section('titulo')
    Meu Perfil - UTube
@endsection

@section('estilos')

    <style>


        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button.editar-perfil {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }

        .titulo {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 15px;
        }

        .videos {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            height: 350px;

        }

        @media only screen and (max-width: 600px) {
            .container-flex {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .col {
                margin-bottom: 15px;
                width: 70%;
            }
        }

    </style>

@endsection

@section('conteudo')

    <div class="container-flex row row-cols-md-2 mt-5 box d-flex align-items-center justify-content-center">

        <div class="col col-md-3">
            <div class="card">
                <img src="{{\Illuminate\Support\Facades\Auth::user()->getFotoPerfil()}}" alt="{{$nomeUsuario}}" style="width:100%">
                <h1 class="nomeDoPerfil">{{$nomeUsuario}} </h1>
                <p class="title">Usuario</p>

                <div hidden id="edita-perfil-{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    <input type="text" name="name" id="name" placeholder="Nome" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" style="border-width: 0px 0px 1px 0px; border-radius: 0px; margin-right: 10px; margin-bottom: 5px">
                    <input type="text" name="lastname" id="lastname" placeholder="Sobrenome" value="{{\Illuminate\Support\Facades\Auth::user()->lastname}}" style="border-width: 0px 0px 1px 0px; border-radius: 0px; margin-right: 10px; margin-bottom: 10px"><br>
                    <button onclick="editarNome({{\Illuminate\Support\Facades\Auth::user()->id}})" class="btn btn-outline-dark mb-2">Salvar</button>
                    @csrf
                </div>

                <p><button class="editar-perfil" onclick="toggleInputPerfil({{\Illuminate\Support\Facades\Auth::user()->id}})">Editar Perfil</button></p>
            </div>
        </div>

        <div class="col col-md-7">

            <div class="row text-center titulo">
                <h1>Videos</h1>
            </div>

            <div class="row videos overflow-auto">

                <ul class="list-group list-group-flush">

                    @foreach($videos as $video)


                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href="/assistir?v={{$video->id}}"><img src="{{$video->getCapa()}}" alt="" class="img-thumbnail" height="100px" width="100px"></a>
                            <a href="/assistir?v={{$video->id}}" class="ml-4"><span id="nome-video-{{$video->id}}">{{$video->nome}}</span></a>
                        </div>

                        <div class="input-group w-50" hidden id="input-nome-video-{{$video->id}}">
                            <input type="text" class="form-control" value="{{$video->nome}}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" onclick="editarVideo({{$video->id}})">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                    </svg>
                                </button>
                                @csrf
                            </div>
                        </div>


                        <span class="d-flex">
                        @auth
                             <button class="btn btn-info btn-sm mr-2" onclick="toggleInput({{$video->id}})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                             </button>
                             <form action="/video/{{$video->id}}" method="post" onsubmit="return confirm('Tem certeza?')">
                             @csrf
                             @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                    </svg>
                                </button>
                            </form>
                        @endauth
                        </span>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>

    </div>

    <script>
        function toggleInput(videoId) {
            const nomeVideoEl = document.getElementById(`nome-video-${videoId}`);
            const inputVideoEl = document.getElementById(`input-nome-video-${videoId}`);
            if (nomeVideoEl.hasAttribute('hidden')) {
                nomeVideoEl.removeAttribute('hidden');
                inputVideoEl.hidden = true;
            } else {
                inputVideoEl.removeAttribute('hidden');
                nomeVideoEl.hidden = true;
            }
        }

        function editarVideo(videoId) {
            let formData = new FormData();
            const nome = document
                .querySelector(`#input-nome-video-${videoId} > input`)
                .value;
            const token = document
                .querySelector(`input[name="_token"]`)
                .value;
            formData.append('nome', nome);
            formData.append('_token', token);

            const url = `/video/${videoId}/editaNome`;
            fetch(url, {
                method: 'POST',
                body: formData
            }).then(() => {
                toggleInput(videoId);
                document.getElementById(`nome-video-${videoId}`).textContent = nome;
            });
        }

        function toggleInputPerfil(userId) {
            const formUserEl = document.getElementById(`edita-perfil-${userId}`);
            if (formUserEl.hasAttribute('hidden')) {
                formUserEl.removeAttribute('hidden');
            } else {
                formUserEl.hidden = true;
            }
        }

        function editarNome(userId) {
            let formData = new FormData();
            const name = document
                .querySelector(`#name`)
                .value;
            const lastname = document
                .querySelector(`#lastname`)
                .value;
            const token = document
                .querySelector(`input[name="_token"]`)
                .value;
            formData.append('name', name);
            formData.append('lastname', lastname);
            formData.append('_token', token);

            const url = `/perfil/${userId}/editaNome`;
            fetch(url, {
                method: 'POST',
                body: formData
            }).then(() => {
                toggleInputPerfil(userId);
                document.querySelector(`.nomeDoPerfil`).textContent = name + " " + lastname;
            });
        }
    </script>

@endsection
