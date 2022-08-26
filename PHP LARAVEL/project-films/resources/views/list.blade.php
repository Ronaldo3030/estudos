@extends('layouts.padrao')

@section('title', 'Lista')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
@endsection

@section('content')
    <div class="container-all">
        <h1 class="title text-center">Lista de filmes</h1>

        <div class="glider-contain d-flex">
            <button aria-label="Previous" class="glider-prev"><i class="fas fa-angle-double-left"></i></button>
            <div class="d-none glider" id="container-filmes">
            </div>
            <img id="loading-filmes" class="m-0-auto" src="{{ asset('images/loading.svg') }}" alt="loading">
            <button aria-label="Next" class="glider-next"><i class="fas fa-angle-double-right"></i></button>
        </div>
    </div>

    {{-- <div id="container-filmes" class="container-filmes"></div> --}}
    <script src="{{ asset('js/list.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
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
