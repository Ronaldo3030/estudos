@extends('layouts.layout')

@section('title', 'Adição de tarefas')

@section('content')
    <h2>Adição</h2>

    @if ($errors->any())
        @component('components.alert')
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        @endcomponent
    @endif

    <form method="POST">
        @csrf

        <label for="titulo">Titulo: </label><br>
        <input type="text" name="titulo"><br>

        <input type="submit" value="Adicionar">
    </form>
@endsection
