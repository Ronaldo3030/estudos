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
            <ul class="w-100">
                <a href=""><li class="item-menu selected"><i class="icon-menu fas fa-th-large"></i>Início</li></a>
                <a href=""><li class="item-menu"><i class="icon-menu fas fa-shopping-basket"></i>Contas</li></a>
                <a href=""><li class="item-menu"><i class="icon-menu fas fa-money-bill-wave-alt"></i>Pagamentos</li></a>
            </ul>
        </div>
        <div class="content-all">
            @yield('content')
        </div>
    </div>
    <script src="https://kit.fontawesome.com/ac5f400d27.js" crossorigin="anonymous"></script>
</body>
</html>