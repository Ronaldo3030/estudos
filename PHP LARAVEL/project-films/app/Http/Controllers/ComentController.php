<?php

namespace App\Http\Controllers;

use App\Models\Coment;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    public function addComent($id){
        return view('addComent', [
            'id' => $id
        ]);
    }
    public function addComentAction(Request $req){
        $author = $req->input('author');
        $comment = $req->input('comment');
        $id = $req->input('id');
        
        $c = new Coment;
        $c->id_film = $id;
        $c->body = $comment;
        $c->author = $author;
        $c->save();

        return redirect()->route('home'); 
    }
}
