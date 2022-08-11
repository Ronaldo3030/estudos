@extends('layouts.layout')

@section('title', 'Listagem de tarefas')

@section('content')
    <h2>Listagem</h2>

    <a href="{{ route('tarefas.add') }}">Adicionar nova Tarefa</a>

    @if (count($list) > 0)
        <ul>
            @foreach ($list as $item)
                <li>
                    <a href="{{ route('tarefas.done', ['id' => $item->id]) }}">
                        [
                        @if ($item->resolvido === 1)
                            Desmarcar
                        @else
                            Marcar
                        @endif
                        ]
                    </a>
                    {{ $item->titulo }}
                    <a href="{{ route('tarefas.edit', ['id' => $item->id]) }}">[ Editar ]</a>
                    <a onclick="return confirm('Deseja mesmo excluir a tarefa {{$item->id}}?')" href="{{ route('tarefas.delete', ['id' => $item->id]) }}">[ Excluir ]</a>
                </li>
            @endforeach
        </ul>
    @else
        Não há itens a serem listados.
    @endif
@endsection
