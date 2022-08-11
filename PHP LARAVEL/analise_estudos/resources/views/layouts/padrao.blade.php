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
        @yield('style');
    </style>
    <title>@yield('title') - Análise de estudos</title>
</head>

<body>
    <header class="d-flex align-items-center justify-content-between bg-white black px-5">
        <a href="/"><img class="logo" src="{{ asset('images/logo.png') }}" alt="icone do site"></a>
        <nav>
            <ul class="d-flex">
                <li class="mx-2"><a class="btn-menu" data-bs-toggle="modal" data-bs-target="#modal-login" href="">Entrar</a></li>
                <li class="mx-2"><a class="btn-menu-reverse" href="/cadastro">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')

    <footer class="px-5 py-2">
        <p>footer</p>
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
