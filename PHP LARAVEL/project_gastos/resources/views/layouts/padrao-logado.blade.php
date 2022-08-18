<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @yield('style')
    <title>Painel - @yield('title')</title>
</head>
<body>
    <header>
        <a href=""><h3 class="text-header">Painel</h3></a>
    </header>

    <div class="container-all">
        <div class="container-menu">
            <ul>
                <a href=""><li>Início</li></a>
                <a href=""><li>Contas</li></a>
                <a href=""><li>Cadastrar pagamento</li></a>
            </ul>
        </div>
        <div class="content-all">
            @yield('content')
        </div>
    </div>
</body>
</html>