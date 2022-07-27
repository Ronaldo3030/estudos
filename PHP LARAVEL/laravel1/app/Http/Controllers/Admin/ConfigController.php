<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $req){
        // all, input, query
        // ALL pega todos os dados
        // INPUT prioriza dados do corpo, se n tiver pega da url
        // QUERY pega os dados da url

        // $data = $req->all();

        // $data = $req->input('nome');
        // $data = $req->query('nome', 'Visitante');

        // $data = $req->only([ 'nome', 'idade' ]);

        $nome = "ronaldo";
        $idade = 13;

        $lista = [
            // 'farinha',
            // 'trigo',
            // 'ovo',
            // 'açucar'
        ];

        return view('admin.config', [
            'nome' => $nome,
            'idade' => $idade,
            'lista' => $lista
        ]);
    }
    public function info(){
        echo "Configurações INFO";
    }
    public function permissoes(){
        echo "Configurações PERMISSÕES";
    }
}
