<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <title>@yield('titulo')</title>


    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

    </style>

    @yield('estilos')
</head>
<body>

    @if(\Illuminate\Support\Facades\Route::current()->uri() !== 'entrar' && \Illuminate\Support\Facades\Route::current()->uri() !== 'cadastrar')
    <nav class="navbar navbar-light bg-light d-flex justify-content-between align-items-center shadow-sm" >
        <div class="container">

            <a class="navbar-brand" href="/">UTube</a>

            <form class="d-flex" method="GET" action="/resultados" name="formulario" onsubmit="return validaFormularioPesquisa()">
                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Pesquisar" name="pesquisa" id="pesquisa">
                <button class="btn btn-outline-dark" type="submit">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </button>
            </form>

            <div>
                @guest
                    <a href="/entrar" class="btn btn-outline-danger">Entrar</a>
                @endguest

                @auth
                <div class="btn-group">
                    <div type="button" class="btn btn-danger" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 50%; width: 40px; height: 40px">
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-xl-start">
                        <li><a class="dropdown-item" href="/perfil">Meu Perfil</a></li>
                        <li><a class="dropdown-item" href="/enviar-video">Enviar Video</a></li>
                        <li><a class="dropdown-item" href="/sair">Sair</a></li>

                    </ul>
                </div>
                @endauth

            </div>

        </div>
    </nav>
    @endif
    <div class="container">
        @yield('conteudo')
    </div>

    <script>
        function validaFormularioPesquisa() {
            var x = document.forms["formulario"]["pesquisa"].value;
            if (x == "") {
                return false;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script></body>
</html>
