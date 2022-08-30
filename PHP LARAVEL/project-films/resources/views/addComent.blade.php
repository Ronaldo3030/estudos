@extends('layouts.padrao')

@section('title', 'Lista')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
@endsection

@section('content')
    <div class="container-all">
        <!-- Link to open the modal -->
        <div class="content">
            <h1 class="title text-center mb-3" id="title-filme"></h1>

            <div class="d-grid" style="grid-template-columns: 2fr 1fr; gap:1.5rem;">
                <img class="shadow filme-coment mt-3" id="image-filme">
                <div class="mt-3">
                    <h3 class="sub-title">Leave your comment below</h3>
                    <form method="POST" action="" style="font-size: 1.5rem;">
                        <div class="mb-1">
                            <label for="Author" class="form-label">Author</label>
                            <input name="author" type="text" class="form-control" id="Author" aria-describedby="AuthorHelp">
                            <div id="AuthorHelp" class="form-text">Just type your name</div>
                        </div>
                        <div class="mb-4">
                            <label for="Comment" class="form-label text">Comment</label>
                            <textarea name="comment" cols="30" rows="10" class="form-control" id="Comment" aria-describedby="CommentHelp"></textarea>
                        </div>
                        <button class="btn-padrao shadow mb-2 modal-btn-coment border-0" type="submit">Coment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

    <script>
        const containerFilmes = document.getElementById('container-filmes')

        const base_url = 'https://api.themoviedb.org/3';
        let id = {{ $id }}
        let type = '/movie/' + id
        const key = '?api_key=31a58005ba599d577a43d7260266cd6c'
        const image_url = 'https://image.tmdb.org/t/p/w1280'
        window.onload = () => {
            const url = base_url + type + key
            fetch(url)
                .then(response => {
                    return response.json()
                }).then(data => {
                    document.getElementById('title-filme').innerText = data.original_title
                    document.getElementById('image-filme').setAttribute('src', image_url + data.backdrop_path)
                    console.log(data)
                }).catch(err => {
                    console.log("ERRO: " + err)
                })
        }
    </script>

    <script>
        const exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget
            const name = button.getAttribute('data-bs-name')
            const image = button.getAttribute('data-bs-image')
            const description = button.getAttribute('data-bs-description')
            const id = button.getAttribute('data-bs-id')
            const modalTitle = exampleModal.querySelector('.modal-title')
            const modalImage = exampleModal.querySelector('.modal-image')
            const modalDescription = exampleModal.querySelector('.modal-description')
            const modalBtnComent = exampleModal.querySelector('.modal-btn-coment')

            modalBtnComent.setAttribute('href', '/' + id + '/coment')
            modalTitle.textContent = name
            modalImage.setAttribute('src', image)
            modalDescription.textContent = description
        })
    </script>
@endsection
