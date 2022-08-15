<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function index()
    {
        return view('registro');
    }

    public function cadastroAction(Request $req)
    {
        $req->validate([
            'nome' => ['required', 'string'],
            'email' => ['required', 'email'],
            'senha' => ['required', 'string'],
            'confirme-senha' => ['required', 'string'],
            'nascimento' => ['required', 'date'],
        ]);

        $nome = $req->input('nome');
        $email = $req->input('email');
        $senha = $req->input('senha');
        $confirmeSenha = $req->input('confirme-senha');
        $nascimento = $req->input('nascimento');

        if ($senha === $confirmeSenha) {
            $data = Usuario::where('email', $email);

            if ($data) {
                return redirect()->route('cadastro')->with('email', 'Esse e-mail já foi cadastrado!');
            }

            $u = new Usuario;
            $u->nome = $nome;
            $u->email = $email;
            $u->senha = $senha;
            $u->data_nascimento = $nascimento;
            $u->save();
            return redirect()->route('home');
        }

        return redirect()->route('cadastro')->with('erro', 'Algum dado está incorreto! Tente novamente.');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => ['required', 'email'],
            'senha' => ['required', 'string'],
        ]);

        $email = $req->input('email');
        $senha = $req->input('senha');
    }
}
