<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - laravel</title>
</head>

<body>
    <header>
        <h1>Tarefas</h1>
    </header>
    <hr>
    <section>
        @yield('content')
    </section>
    <hr>
    <footer>
        <p>footer</p>
    </footer>
</body>

</html>
