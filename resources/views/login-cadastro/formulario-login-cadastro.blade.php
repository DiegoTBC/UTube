@extends('layout')


@section('titulo')
    Entrar
@endsection

@section('conteudo')


<div class="container d-flex justify-content-center" style="height: 100vh; width: 100vh">
    <div class="align-self-center" style="width: 50vh; height: 50vh">
        <form action="/entrar" class="needs-validation" method="POST" novalidate style="width: 100%;">
            @csrf
            @if (\Illuminate\Support\Facades\Route::current()->uri() === 'cadastrar' && !\Illuminate\Support\Facades\Auth::check())
            <div class="input-group mb-3">
                <input type="nome" class="form-control shadow-sm w-45" id="text" name="nome" placeholder="Nome" required style="border-width: 0px 0px 1px 0px; border-radius: 0px; margin-right: 10px">
                <input type="sobrenome" class="form-control shadow-sm w-45" id="text" name="sobrenome" placeholder="Sobrenome" required style="border-width: 0px 0px 1px 0px; border-radius: 0px;">
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
            @endif
            <div class="col-12 text-center">
                <button class="btn btn-outline-light shadow text-success" type="submit" >{{$textoBotao}}</button>
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
@endsection

