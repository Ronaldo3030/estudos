<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(){
        return view('config');
    }
    public function info(){
        echo "Configurações INFO";
    }
    public function permissoes(){
        echo "Configurações PERMISSÕES";
    }
}
