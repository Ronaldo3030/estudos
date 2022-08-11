@extends('layouts.padrao')

@section('style')
    .title{
    font-weight: 600;
    }
    .image-login{
    width: 100%;
    height: 100%;
    }
    .image-login img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 6px 0 0 6px;
    }
    .btn-entrar{
    background-color: var(--black);
    padding: 13px 20px;
    width: 100%;
    font-size: 20px !important;
    border-radius: 25px;
    text-decoration: none;
    color: var(--white);
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    transition: color .2s ease-in-out;
    }
    .content-login{
    margin-left: 2rem !important;
    margin-right: 2rem !important;
    padding-top: 6rem!important;
    padding-bottom: 6rem!important;
    }
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
    @component('components.modal-login')
        @slot('style')
            modal-lg
        @endslot
        @slot('nome_modal')
            modal-login
        @endslot
        <div class="row">
            <div class="col">
                <div class="image-login">
                    <img src="{{ asset('images/imagem-login.jpg') }}" alt="Itens de estudo">
                </div>
            </div>
            <div class="col content-login">
                <h2 class="title mb-4 text-center">Bem Vindo</h2>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="senha" type="password" class="form-control" id="floatingInput" placeholder="Senha">
                    <label for="floatingInput">Senha</label>
                </div>
                <button type="submit" class="mt-1 btn-menu-reverse btn-entrar border-0 shadow w-100">Entrar</button>
            </div>
        </div>
    @endcomponent
@endsection
