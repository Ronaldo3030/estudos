<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $data = DB::select('SELECT * FROM usuarios WHERE email = :email', [
                'email' => $email
            ]);
            if (count($data) > 0) {
                echo "Existe";
                return;
            }
            DB::insert('INSERT INTO usuarios (nome, data_nascimento, senha, email) VALUES (:nome, :nascimento, :senha, :email)', [
                'nome' => $nome,
                'nascimento' => $nascimento,
                'senha' => $senha,
                'email' => $email,
            ]);
            return redirect()->route('home');
        }

        return redirect()->route('cadastro');
    }
}
