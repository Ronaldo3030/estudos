<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginAction(Request $req){
        $email = $req->input('email');
        $senha = $req->input('senha');

        if($email && $senha){
            $conta = Usuario::where('email', $email)->where('senha', $senha)->first();
            if($conta){
                return redirect()->route('painel');
            }
        }
        return redirect()->route('login')->with('erro', 'Algum dado está incorreto! Tente novamente.');
    }
}
