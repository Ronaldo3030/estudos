<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginAction(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            dd('logou');
        }else{
            dd('não logou');
        }
    }
}
