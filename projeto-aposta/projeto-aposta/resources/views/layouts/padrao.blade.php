<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style type="text/css">
        .container-all {
            display: grid;
            grid-template-columns: 250px 1fr;
        }

        .menu-lateral {
            background: rgb(62, 218, 166);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jogos{
            overflow: auto;
        }

        ul {
            list-style: none;
            padding: 25px 10px;
            margin: 0;
        }

        .loading {
            width: 50%;
            height: auto;
        }

        @yield('style');
    </style>

    <title>Bet your luck - @yield('title')</title>
</head>

<body>
    <header class="navbar navbar-dark bg-dark px-5 py-2" style="color: white;">
        <h3>icon</h3>
        @empty($_SESSION['user'])
            <div>
                <a href="/register" class="btn btn-primary">
                    Registre-se
                </a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-login">
                    Login
                </button>
            </div>
        @endempty
    </header>

    <div class="container-all">
        <div class="menu-lateral">
            <img class="loading"
                src="https://raw.githubusercontent.com/Codelessly/FlutterLoadingGIFs/master/packages/cupertino_activity_indicator.gif"
                alt="">
            <ul class="jogos d-none">
            </ul>
        </div>

        <section>
            @yield('content')
        </section>
    </div>

    <footer>footer</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const url = 'https://nodejs-api-futball.herokuapp.com/'
            fetch(url)
                .then((resp) => resp.json())
                .then(function(data) {
                    const containerJogos = document.querySelector('.jogos')
                    $('.loading').addClass('d-none')
                    $('.jogos').removeClass('d-none')
                    console.log(data)
                    data.map(jogo => {
                        containerJogos.innerHTML += `<li>${jogo.time_casa} x ${jogo.time_fora}</li>`
                        console.log(jogo.time_casa)
                    })
                })
                .catch(function(error) {
                    console.log(error);
                });

        })
    </script>
</body>

</html>
