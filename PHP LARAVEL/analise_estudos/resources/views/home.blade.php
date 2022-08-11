@extends('layouts.padrao')

@section('style')

@endsection

@section('title', 'Início')

@section('content')
    <!-- https://cdn.dribbble.com/userupload/3229029/file/original-092f16697365ddeb4ea39b815a966574.png?compress=1&resize=752x -->
    <div class="container-principal">
        <div class="title text-center mb-5">
            <h2>Bem Vindo Ao</h2>
            <h1>Análise De Estudos</h1>
        </div>
        <div class="content row my-3 gap-3">
            <div class="col">
                <div class="mb-5">
                    <h3 class="sub-title">Controle de estudos</h3>
                    <p class="texto gray">Aqui você consegue controlar seus estudos de maneira prática e rápida.</p>
                </div>
                <div class="d-flex flex-column w-75">
                    <div class="image-user rounded-circle"
                        style="background-image: url(https://thumbs.dreamstime.com/b/usu%C3%A1rio-sem-cara-masculino-do-%C3%ADcone-perfil-avatar-no-fundo-redondo-colorido-102878355.jpg);">
                    </div>
                    <div class="image-user rounded-circle position-relative"
                        style="background-image: url(https://thumbs.dreamstime.com/z/usu%C3%A1rio-sem-cara-masculino-do-%C3%ADcone-perfil-avatar-no-fundo-redondo-colorido-102878364.jpg); top: -15px;">
                    </div>
                    <h5 class="mini-title font-13 position-relative" style="top: -15px;">Usuários que já estão dentro dessa
                    </h5>
                </div>
            </div>
            <div class="col-8 d-flex justify-content-between container-imagens p-0">
                <div class="content-image">
                    <div class="image rounded-circle bot shadow"
                        style="background-image: url({{ asset('images/imagem-home1.jpg') }});"></div>
                </div>
                <div class="content-image">
                    <div class="image rounded-circle shadow"
                        style="background-image: url({{ asset('images/imagem-home2.jpg') }});"></div>
                </div>
                <div class="content-image">
                    <div class="image rounded-circle bot shadow"
                        style="background-image: url({{ asset('images/imagem-home5.jpg') }});"></div>
                </div>
                <div class="content-image">
                    <div class="image rounded-circle bot-bot shadow"
                        style="background-image: url({{ asset('images/imagem-home4.jpg') }});"></div>
                </div>
            </div>
            <div class="col">
                <div class="text-effect position-relative">
                    <div class="effect"></div>
                    <p class="texto">Estude mais</p>
                    <div class="traco"></div>
                    <h5 class="mini-title">Gerencie seus estudos muito melhor</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
