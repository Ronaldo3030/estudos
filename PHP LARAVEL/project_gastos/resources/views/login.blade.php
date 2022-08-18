@extends('layouts.padrao')

@section('title', 'Login')

@section('content')
    <h1>Login</h1>
    @if (session('erro'))
        {{ session('erro') }}
    @endif
    <form method="POST">
        @csrf

        <label for="email">email:</label><br>
        <input type="email" name="email"><br>
        <label for="senha">senha:</label><br>
        <input type="password" name="senha"><br>
        <input type="submit" value="Entrar">
    </form>
    
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>

    <script>
        $("#data").mask('00/00/0000')
    </script>
@endsection
