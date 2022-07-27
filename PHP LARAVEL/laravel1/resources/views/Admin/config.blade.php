@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>Configurações</h1>

    <p>Meu nome é {{ $nome }} e tenho {{ $idade }}</p><br>

    {{-- @if ($idade > 18)
        <p>Maior de idade</p>
    @else
        <p>Menor de idade</p>
    @endif --}}

    {{-- se estiver vazio --}}
    {{-- @empty($nome)
        <p>Não existe um nome!</p>
    @endempty --}}

    {{-- for --}}
    {{-- @for ($i = 0; $i < 10; $i++)
        <p>O valor é {{$i}}</p></br>
    @endfor --}}

    <h2>Lista bolo:</h2>
    <ul>
        {{-- foreach --}}
        {{-- @if (count($lista) > 0)
            @foreach ($lista as $item)
                <li>{{ $item }}</li>
            @endforeach
        @else
            <p>Não tem ingredientes para esse bolo</p>
        @endif --}}

        {{-- Maneira mais facil --}}
        @forelse($lista as $item)
            <li>{{ $item }}</li>
        @empty
            <p>Não tem ingredientes para esse bolo</p>
        @endforelse
    </ul>


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
