<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentController extends Controller
{
    public function addComent($id){
        return view('addComent', [
            'id' => $id
        ]);
    }
}
