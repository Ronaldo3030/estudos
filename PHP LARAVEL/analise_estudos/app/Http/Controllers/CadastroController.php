<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        return view('registro');
    }

    public function cadastroAction(Request $req){
        $nome = $req->input('nome');
        $email = $req->input('email');
        $senha = $req->input('senha');
        $confirmeSenha = $req->input('confirme-senha');
        $nascimento = $req->input('nascimento');

        if($nome && $email && $senha && $confirmeSenha && $nascimento){
            if($senha === $confirmeSenha){
                
            }
        }
    }
}
