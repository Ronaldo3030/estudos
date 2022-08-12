<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class HomeController extends Controller
{
    public function __invoke()
    {
        // SELECT * FROM TAREFA
        // $list = Tarefa::all();

        // WHERE
        // $list = Tarefa::where('resolvido', 0)->get();
        // WHERE com 1 item
        // $item = Tarefa::where('resolvido', 0)->first();
        // WHERE com mais de uma condição
        // $list = Tarefa::where('resolvido', 0)->where('titulo', 'abc')->get();
        $list = Tarefa::where('resolvido', 0)->orWhere('resolvido', 1)->get();
        // echo $item->titulo;

        // procurar por id
        // $item = Tarefa::find([2, 3, 4, 5]);
        // $item = Tarefa::find(3);
        // echo $item->titulo . "<br><hr>";

        // contador de tabela
        // $total = Tarefa::where('resolvido', 1)->count();
        // echo $total."<br><hr>";

        // inserir dados na tabela
        // $t = new Tarefa;
        // $t->titulo = 'Inserido pelo eloquent2'; // titulo é o nome da query que vai ser inserida
        // $t->save();

        // update dado na tabela
        // $t = Tarefa::find(3);
        // $t->titulo = "alterado pelo eloquent";
        // $t->save();
        // update em mais de um dado na tabela
        // Tarefa::where('resolvido', 0)->update([
        //     'resolvido' => 1
        // ]);

        // delete dado na tabela
        // $t = Tarefa::find(3);
        // $t->delete();
        // deletar mais de um dado na tabela
        // Tarefa::where('resolvido', 0)->delete();

        foreach ($list as $item) {
            echo $item->titulo . "<br>";
        }
    }
}
