@extends('layout')

@section('titulo')
    Enviar Video - UTube
@endsection

@section('estilos')



    <style>

        .grupo-input {
            width: 30%;
        }

    </style>
@endsection

@section('conteudo')

    <form action="/enviar-video" method="post" class="box d-flex align-items-center justify-content-center flex-column mt-5" enctype="multipart/form-data">
        @csrf
        <div class="grupo-input mb-3">
            <label for="nome-video" class="form-label">Nome do video</label>
            <input type="text" class="form-control shadow-sm" id="nomeVideo" name="nomeVideo" placeholder="" style="border-width: 0px 0px 1px 0px; border-radius: 0px; margin-right: 10px; margin-bottom: 5px" required>
        </div>
        <div class="grupo-input mb-3">
            <label for="descricao-video" class="form-label">Descrição</label>
            <textarea class="form-control shadow-sm" id="descricaoVideo" name="descricaoVideo" rows="3" required></textarea>
        </div>
        <div class="grupo-input mb-3">
            <label for="arquivo-imagem" class="form-label">Capa do Video</label>
            <input class="form-control shadow-sm" type="file" id="arquivo-imagem" name="arquivo-imagem" accept=".png, .jpg, .jpeg" >
        </div>
        <div class="grupo-input mb-3">
            <input type="hidden" name="MAX_FILE_SIZE" value="100000000000" />
            <label for="arquivo-video" class="form-label">Video</label>
            <input class="form-control shadow-sm" type="file" id="arquivo-video" name="arquivo-video" accept=".mp4" required>
        </div>
        <input type="submit">
    </form>

@endsection
