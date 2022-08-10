<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasController extends Controller
{
    public function list()
    {
        $list = DB::select('SELECT * FROM tarefas');

        return view('tarefas.list', [
            'list' => $list
        ]);
    }
    public function add()
    {
        return view('tarefas.add');
    }
    public function addAction(Request $request)
    {
        if ($request->filled('titulo')) {
            $titulo = $request->input('titulo');

            DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)', [
                'titulo' => $titulo
            ]);

            return redirect()
                ->route('tarefas.list');
        } else {
            return redirect()
                ->route('tarefas.add')
                ->with('warning', 'Você não preencheu o Titulo');
        }
    }
    public function edit()
    {
        return view('tarefas.edit');
    }
    public function editAction()
    {
    }
    public function delete()
    {
    }
    public function done()
    {
    }
}
