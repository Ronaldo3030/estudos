@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>Configurações</h1>

    <p>Meu nome é {{ $nome }} e tenho {{ $idade }}</p><br>

    @if ($idade > 18)
        <p>Maior de idade</p>
    @else
        <p>Menor de idade</p>
    @endif

    {{-- se estiver vazio --}}
    @empty($nome)
        <p>Não existe um nome!</p>
    @endempty

    <form method="POST">
        @csrf

        Nome:<br>
        <input type="text" name="nome"><br>
        Idade:<br>
        <input type="text" name="idade"><br>
        <input type="submit" value="Enviar">
    </form>

    ...
@endsection
