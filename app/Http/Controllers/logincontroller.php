<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function verify(Request $req){
        //dd($req);
        if($req->uname==$req->password){
            return redirect('/home');
        }

        else{
            echo "Invalid user";
        }
    }
}
