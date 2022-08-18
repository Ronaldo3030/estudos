@extends('layouts.padrao')

@section('title', 'Cadastro')

@section('content')
    <h1>Cadastro</h1>
    @if (session('erro'))
        {{ session('erro') }}
    @endif
    <form method="POST">
        @csrf

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome"><br>
        <label for="email">email:</label><br>
        <input type="email" name="email"><br>
        <label for="senha">senha:</label><br>
        <input type="password" name="senha"><br>
        <label for="nascimento">Data de nascimento:</label><br>
        <input type="text" id="data" name="nascimento" placeholder="dd/mm/aaaa"><br>
        <input type="submit" value="Cadastrar">
    </form>
    
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>

    <script>
        $("#data").mask('00/00/0000')
    </script>
@endsection
