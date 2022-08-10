@extends('layouts.layout')

@section('title', 'Adição de tarefas')

@section('content')
    <h2>Adição</h2>

    @if (session('warning'))
        @component('components.alert')
            {{ session('warning') }}
        @endcomponent
    @endif

    <form method="POST">
        @csrf

        <label for="titulo">Titulo: </label><br>
        <input type="text" name="titulo"><br>

        <input type="submit" value="Enviar">
    </form>
@endsection
