@extends('layouts.padrao')

@section('title', 'Lista')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
@endsection

@section('content')
    <div class="container-all">
        <!-- Link to open the modal -->
        <div class="content">
            <h1 class="title text-center">Lista de filmes</h1>
    
            <div class="glider-contain d-flex">
                <button aria-label="Previous" class="glider-prev"><i class="fas fa-angle-double-left"></i></button>
                <div class="d-none glider" id="container-filmes">
                </div>
                <img id="loading-filmes" class="m-0-auto" src="{{ asset('images/loading.svg') }}" alt="loading">
                <button aria-label="Next" class="glider-next"><i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body shadow rounded">
                    <div class="mb-3">
                        <h3 class="title modal-title pt-2" id="title"></h3>
                    </div>
                    <div class="info-modal">
                        <img class="modal-image rounded" alt="Imagem filme">
                        <div class="w-100">
                            <div class="d-flex content-star mb-3">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                {{-- <i class="fas fa-star"></i> --}}
                            </div>
                            <p class="modal-description text"></p>
                            <a class="btn-padrao shadow mb-2 modal-btn-coment" href="">Comment</a>
                            <a class="btn-padrao shadow" href="">View Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/list.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
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

            modalBtnComent.setAttribute('href', '/'+id+'/coment')
            modalTitle.textContent = name
            modalImage.setAttribute('src', image)
            modalDescription.textContent = description
        })
    </script>
    <script>
        setTimeout(() => {
            document.querySelector('.glider').classList.remove('d-none')
            document.querySelector('#loading-filmes').classList.add('d-none')
            new Glider(document.querySelector('.glider'), {
                slidesToScroll: 1,
                slidesToShow: 4.5,
                draggable: true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                }
            });
        }, 3000);
    </script>
@endsection
