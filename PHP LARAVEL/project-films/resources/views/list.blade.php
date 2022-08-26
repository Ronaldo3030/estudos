@extends('layouts.padrao')

@section('title', 'Lista')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
@endsection

@section('content')
    <div class="container-all">
        <h1>Lista de filmes</h1>
    
        <div class="glider-contain">
            <div class="glider" id="container-filmes">
            </div>
    
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
        </div>
    </div>

    {{-- <div id="container-filmes" class="container-filmes"></div> --}}
    <script src="{{ asset('js/list.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script>
        setTimeout(() => {
            new Glider(document.querySelector('.glider'), {
                slidesToShow: 5,
                slidesToScroll: 5,
                draggable: true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                }
            });
        }, 1000);
    </script>
@endsection
