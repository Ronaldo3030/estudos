@extends('layouts.padrao')

@section('title', 'Lista')

@section('content')
    <h1>Lista de filmes</h1>

    <div id="container-filmes">
        <div>
            <h2>nome</h2>
        </div>
    </div>

    <script>
        const containerFilmes = document.getElementById('container-filmes')
        
        function criaCard(text, image){
            let div = document.createElement("div")
            let p = document.createElement("p")
            let img = document.createElement("img")
            img.setAttribute('src', 'https://image.tmdb.org/t/p/w500/'+image)
            p.innerText = text
            containerFilmes.appendChild(div)
            div.appendChild(p)
            div.appendChild(img)
        }

        const base_url = 'https://api.themoviedb.org/3';
        let type = '/discover/movie'
        const key = '?api_key=31a58005ba599d577a43d7260266cd6c'
        const image_url = 'https://image.tmdb.org/t/p/w500'
        window.onload = () => {
            const url = base_url + type + key
            fetch(url)
            .then(response => {
                return response.json()
            }).then(data => {
                data.results.forEach(result => {
                    console.log(result)
                    criaCard(result.original_title, result.poster_path)
                })
                    console.log(data.results)
                }).catch(err => {
                    console.log("ERRO: " + err)
                })
        }
    </script>
@endsection
