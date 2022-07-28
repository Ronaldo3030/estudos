@extends('layouts.admin')

@section('style')
    p{
    margin: 0;
    }
    .d-flex{
    display: flex;
    }
    .resolvido > p{
    text-decoration: line-through;
    color: #c1c1c1;
    font-style: italic;
    }
@endsection

@section('title', 'Lista de tarefas')

@section('content')
    <h1>Listagem</h1><br>
    <a href="">Adicionar nova tarefa</a>
    @if (count($list) > 0)
        <ul>
            @foreach ($list as $item)
                <li class="d-flex @if ($item->resolvido === 1) resolvido @endif">
                    <a href="">
                        [
                        @if ($item->resolvido === 1)
                            desmarcar
                        @else
                            marcar
                        @endif
                        ]
                    </a>
                    <p>{{ $item->titulo }}</p>
                    <a href="">[Editar]</a>
                    <a href="">[Excluir]</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum item encontrado!</p>
    @endif
@endsection
