<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasController extends Controller
{
    public function list()
    {
        $list = DB::select('SELECT * FROM tarefas');

        return view('Tarefas.list', [
            'list' => $list
        ]);
    }
    public function add()
    {
        return view('Tarefas.add');
    }
    public function addAction()
    {
    }
    public function edit()
    {
        return view('Tarefas.edit');
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
