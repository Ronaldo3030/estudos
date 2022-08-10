@extends('layouts.layout')

@section('title', 'Adição de tarefas')

@section('content')
    <h2>Adição</h2>

    <form method="POST">
        @csrf

        <label for="titulo">Titulo: </label><br>
        <input type="text" name="titulo"><br>

        <input type="submit" value="Enviar">
    </form>
@endsection