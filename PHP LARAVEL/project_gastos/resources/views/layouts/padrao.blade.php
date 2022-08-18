<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('style')
    <title>Gastos - @yield('title')</title>
</head>
<body>
    <header>
        <h3>Header</h3>
        <a href="/login">Logar</a>
        <a href="/cadastro">Cadastre-se</a>
    </header>
    @yield('content')
</body>
</html>