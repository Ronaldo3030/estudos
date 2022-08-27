{{-- https://www.figma.com/file/Ae494A1s0Nwlkg0FHiM368/Chainery-website-(Community)  --}}
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        @yield('style');
    </style>
    <title>@yield('title') - Filmes</title>
</head>

<body>
    <header>
        <h1>Header</h1>
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        <p>footer</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ac5f400d27.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
