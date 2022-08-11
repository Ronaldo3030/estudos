@extends('layouts.layout')

@section('title', 'Edição de tarefas')

@section('content')
    <h2>Edição de tarefas</h2>

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
        <input type="text" name="titulo" value="{{ $data->titulo }}"><br>

        <input type="submit" value="Salvar">
    </form>
@endsection
