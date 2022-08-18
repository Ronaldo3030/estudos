<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function index(){
        return view('cadastro');
    }

    public function cadastroAction(Request $req){
        $nome = $req->input('nome');
        $email = $req->input('email');
        $senha = $req->input('senha');
        $nascimento = $req->input('nascimento');

        if($nome && $email && $senha && $nascimento){
            $conta = Usuario::where('email', $email)->first();
            if(!$conta){
                $u = new Usuario;
                $u->nome = $nome;
                $u->email = $email;
                $u->senha = $senha;
                $u->data_nascimento = $nascimento;
                $u->save();
                return redirect()->route('home');
            }
            return redirect()->route('cadastro')->with('erro', 'Email já cadastrado! Tente novamente.');
        }
        return redirect()->route('cadastro')->with('erro', 'Dado incorreto! Tente novamente.');
    }
}
