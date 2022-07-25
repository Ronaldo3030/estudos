<?php

namespace App\Http\Controllers;

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

        return view('config');
    }
    public function info(){
        echo "Configurações INFO";
    }
    public function permissoes(){
        echo "Configurações PERMISSÕES";
    }
}
