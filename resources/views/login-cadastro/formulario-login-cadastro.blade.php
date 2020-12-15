@extends('layout')


@section('titulo')
    @if (\Illuminate\Support\Facades\Route::current()->uri() === 'entrar')
    Entrar
    @else
    Cadastrar
    @endif
@endsection

@section('conteudo')


<div class="container d-flex justify-content-center" style="height: 100vh; width: 100vh">
    <div class="align-self-center" style="width: 50vh; height: 50vh">
        <form action="@php echo \Illuminate\Support\Facades\Route::current()->uri() === 'entrar' ? '/entrar' : '/cadastrar' @endphp"
              class="needs-validation" method="POST" novalidate style="width: 100%;" enctype="multipart/form-data">

            @csrf

            @if(session('erro'))
            <div class="alert alert-warning" role="alert">
                {{session('erro')}}
            </div>
            @endif

            @if (\Illuminate\Support\Facades\Route::current()->uri() === 'cadastrar' && !\Illuminate\Support\Facades\Auth::check())
            <div class="input-group mb-3">
                <input type="text" class="form-control shadow-sm w-45" id="name" name="name" placeholder="Nome" required style="border-width: 0px 0px 1px 0px; border-radius: 0px; margin-right: 10px">
                <input type="text" class="form-control shadow-sm w-45" id="lastname" name="lastname" placeholder="Sobrenome" required style="border-width: 0px 0px 1px 0px; border-radius: 0px;">
            </div>
            @endif
            <div class="mb-3">
                <input type="email" class="form-control shadow-sm" id="email" name="email" placeholder="E-mail" required style="border-width: 0px 0px 1px 0px; border-radius: 0px;">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control shadow-sm" id="password" name="password" placeholder="Senha" required style="border-width: 0px 0px 1px 0px; border-radius: 0px">
            </div>
            @if (\Illuminate\Support\Facades\Route::current()->uri() === 'cadastrar' && !\Illuminate\Support\Facades\Auth::check())
            <div class="mb-3">
                <input type="password" class="form-control shadow-sm" id="password2" name="password2" placeholder="Repita a senha" required style="border-width: 0px 0px 1px 0px; border-radius: 0px">
            </div>
             <div class="mb-3">
                <input type="file" class="form-control shadow-sm" id="foto_perfil" name="foto_perfil" placeholder="Foto de Perfil" required style="border-width: 0px 0px 1px 0px; border-radius: 0px" accept=".png, .jpg, .jpeg">
             </div>
            @endif
            <div class="alert alert-danger" role="alert" style="display: none">
                Senhas divergentes !
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-outline-light shadow text-success" type="submit" id="botaoCadastrar" onclick="return confereSenhasIguais()">{{$textoBotao}}</button>
                @if (\Illuminate\Support\Facades\Route::current()->uri() === 'cadastrar' && !\Illuminate\Support\Facades\Auth::check())
                <a href="/entrar" class="btn btn-outline-light shadow text-danger" type="submit" style="margin-left: 15px;">Cancelar</a>
                @endif
            </div>
        </form>
        <br>
        @if (\Illuminate\Support\Facades\Route::current()->uri() === 'entrar')
        <div>
            <p class="text-center">Ainda não possui uma conta?</p>
            <p class="text-center"><b><a href="/cadastrar" style="text-decoration: none; color: inherit;">Clique aqui</a></b> e cadastra-se.</p>
        </div>
        @endif
    </div>
</div>


    @include('valida-formulario')

    @if(\Illuminate\Support\Facades\Route::current()->uri() === 'cadastrar')

        <script>

            function confereSenhasIguais() {
                var pw = document.querySelector('#password')
                var pw2 = document.querySelector('#password2')

                if (pw.value !== pw2.value) {
                    document.querySelector('.alert').style.display = 'block';
                    return false
                }
            }

        </script>

    @endif

@endsection

