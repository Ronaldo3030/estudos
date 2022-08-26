<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmeController extends Controller
{
    public function list(){
        return view('list');
    }
}
