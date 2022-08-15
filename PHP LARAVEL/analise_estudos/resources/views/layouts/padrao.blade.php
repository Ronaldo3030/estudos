<!DOCTYPE html>
<html lang="pt-br">
<!-- https://dribbble.com/shots/16956811-DINA-Medtech-R-D-software -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .title {
            font-weight: 600;
        }

        .image-login {
            width: 100%;
            height: 100%;
        }

        .image-login img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 6px 0 0 6px;
        }

        .btn-entrar {
            background-color: var(--black);
            padding: 13px 20px;
            width: 100%;
            font-size: 20px !important;
            border-radius: 25px;
            text-decoration: none;
            color: var(--white);
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: color .2s ease-in-out;
        }

        .content-login {
            margin-left: 2rem !important;
            margin-right: 2rem !important;
            padding-top: 6rem !important;
            padding-bottom: 6rem !important;
        }

        @yield('style');
    </style>
    <title>@yield('title') - Análise de estudos</title>
</head>

<body>
    <header class="d-flex align-items-center justify-content-between bg-white black px-5">
        <a href="/"><img class="logo" src="{{ asset('images/logo.png') }}" alt="icone do site"></a>
        <nav>
            <ul class="d-flex">
                <li class="mx-2"><a class="btn-menu" data-bs-toggle="modal" data-bs-target="#modal-login"
                        href="">Entrar</a></li>
                <li class="mx-2"><a class="btn-menu-reverse" href="/cadastro">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')

    @component('components.modal-login')
        @slot('style')
            modal-lg
        @endslot
        @slot('nome_modal')
            modal-login
        @endslot
        <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <div class="image-login">
                        <img src="{{ asset('images/imagem-login.jpg') }}" alt="Itens de estudo">
                    </div>
                </div>
                <div class="col content-login">
                    <h2 class="title mb-4 text-center">Bem Vindo</h2>
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="senha" type="password" class="form-control" id="floatingInput" placeholder="Senha">
                        <label for="floatingInput">Senha</label>
                    </div>
                    <div class="mb-3">
                        <a href="/cadastro">Registre-se</a>
                    </div>
                    <button type="submit" class="mt-1 btn-menu-reverse btn-entrar border-0 shadow w-100">Entrar</button>
                </div>
            </div>
        </form>
    @endcomponent
    <footer class="px-5 py-2">
        <p>footer</p>
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
