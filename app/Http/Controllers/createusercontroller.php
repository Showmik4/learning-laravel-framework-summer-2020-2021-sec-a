<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createusercontroller extends Controller
{
    //
    public function index(){

        $usr=$this->getuserlist();
        return view('/user')->with('userlist',$usr);
        //echo "posted";
    }
 //
 public function getuserlist(){

  return[
      ['Id'=>1,'Name'=>'showmik','Password'=>'123','Email'=>'s.@gmail','Type'=>'016474'],
      ['Id'=>2,'Name'=>'showmik','Password'=>'123','Email'=>'s.@gmail','Type'=>'016474'],
      ['Id'=>3,'Name'=>'showmik','Password'=>'123','Email'=>'s.@gmail','Type'=>'016474']
  ];
  
  
}

    public function create(){
        return view('/create');
      // echo "Posted";
    }

    public function back(){
        return redirect('/home');
      // echo "Posted";
    }

 
    public function details($id){
      //echo $id;
    // echo "Posted";

    $user=['Id'=>1,'Name'=>'showmik','Password'=>'123','Email'=>'s.@gmail','Type'=>'016474'];
    return view('/details')->with('user',$user);


      }

     /* public function destroy(Request $req)
      {
          $id = $req->id;
          foreach ($this->user as $users) {
              if ($user['id'] == $id) {
                  return view('user')->with('user', $users);
              }
          }
  
          return redirect('user')->with('user', []);
      }*/




  public function delete($id){
    //echo $id;
  // echo "Posted";

  unset($this->usr[$id+1]);
        return view('class_work.home')->with('users', $this->users);

}

public function destroy(){
  //echo $id;
// echo "Posted";

return redirect('/user');

}












}
