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
                <img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" alt="John" style="width:100%">
                <h1>Diego Torres</h1>
                <p class="title">Usuario</p>
                <p>Pirapozinho SP</p>

                <form action="POST">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Nome" value="" style="border-width: 0px 0px 1px 0px; border-radius: 0px; margin-right: 10px; margin-bottom: 5px">
                    <input type="email" name="email" id="email" placeholder="E-Mail" value="" style="border-width: 0px 0px 1px 0px; border-radius: 0px; margin-right: 10px; margin-bottom: 10px">
                </form>

                <p><button class="editar-perfil">Editar Perfil</button></p>
            </div>
            <!--<img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" alt="" width="320px" height="180px" style="border-radius: 50%">-->
        </div>

        <div class="col col-md-7">

            <div class="row text-center titulo">
                <h1>Videos</h1>
            </div>

            <div class="row videos overflow-auto">

                <ul class="list-group list-group-flush">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><img src="https://blog.futfanatics.com.br/wp-content/uploads/2019/09/Capa-Blog.jpg" alt="" class="img-thumbnail" height="100px" width="100px"></a>
                            <a href=""><span id="">Titulo do Video</span></a>
                        </div>

                        <span class="d-flex">
                        @auth
                             <button class="btn btn-info btn-sm mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                             </button>
                             <form action="" method="post" onsubmit="return confirm('Tem certeza?')">
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
                </ul>
            </div>
        </div>

    </div>


@endsection
