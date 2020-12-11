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
    </style>

@endsection

@section('conteudo')

    <div class="row row-cols-md-2 mt-5 box">

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

                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
                <p>dsdasdasd</p>
            </div>
        </div>

    </div>


@endsection
