<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
    public function index(){
       // $id=123;
        return view('home')->with('id','123')
                           ->with('Name','Showmik')
        
        ;
    }
}
