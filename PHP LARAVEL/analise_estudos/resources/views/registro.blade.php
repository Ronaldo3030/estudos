@extends('layouts.padrao')

@section('style')
    .title{
    font-weight: 600;
    }
    .image-cadastro{
    width: 100%;
    height: 100%;
    }
    .image-cadastro img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
    }
    .btn-cadastro{
    background-color: var(--black);
    padding: 10px 20px;
    width: 100%;
    font-size: 20px !important;
    border-radius: 25px;
    text-decoration: none;
    color: var(--white);
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    transition: color .2s ease-in-out;
    }
@endsection

@section('title', 'Registro')

@section('content')
    <!-- https://cdn.dribbble.com/users/5560853/screenshots/16460572/media/3384bc7f5ddbddc31f459f817fcb21f9.png?compress=1&resize=768x576&vertical=top -->
    <div class="container-principal row">
        <div class="col">
            <div class="container-form my-4 d-flex flex-column align-items-center">
                <h2 class="title mb-4">Cadastro</h2>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                @endif
                <form class="w-75" method="POST" action="/cadastro">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputnome" class="form-label mini-title">Nome*</label>
                        <input name="nome" type="text" class="form-control" id="exampleInputnome"
                            aria-describedby="nomeHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputemail" class="form-label mini-title">Email*</label>
                        <input name="email" type="email" class="form-control" id="exampleInputemail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputsenha" class="form-label mini-title">Senha*</label>
                        <input name="senha" type="password" class="form-control" id="exampleInputsenha"
                            aria-describedby="senhaHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputconfirme-senha" class="form-label mini-title">Confirme a senha*</label>
                        <input name="confirme-senha" type="password" class="form-control" id="exampleInputconfirme-senha"
                            aria-describedby="confirmeSenhaHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputnascimento" class="form-label mini-title">Data de nascimento*</label>
                        <input name="nascimento" type="text" class="form-control date" id="nascimento"
                            aria-describedby="nascimentoHelp" placeholder="dd/mm/aaaa">
                    </div>
                    <button type="submit" class="mt-3 btn-menu-reverse btn-cadastro border-0 shadow">Cadastrar</button>
                </form>
            </div>
        </div>
        <div class="col">
            <div class="image-cadastro">
                <img src="{{ asset('images/imagem-cadastro.png') }}" alt="Pessoa com mochila e livros">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.date').mask('00/00/0000')
        });
    </script>
@endsection
