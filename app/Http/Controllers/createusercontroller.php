<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createusercontroller extends Controller
{
    //
    public function index(){

        $usr=[
            [1,'showmik','123','s.@gmail','016474'],
            [2,'showmik','123','s.@gmail','016474'],
            [3,'showmik','123','s.@gmail','016474']
        ];
        return view('/user')->with('userlist',$usr);
        //echo "posted";
    }

    public function create(){
        return view('/create');
      // echo "Posted";
    }

    public function back(){
        return redirect('/home');
      // echo "Posted";
    }




}
