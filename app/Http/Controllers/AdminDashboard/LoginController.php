<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
 public function index(){
    return view('auth.auth.login');
 }



 
 public function login()
 {
     return view('auth.auth-login'); 
 }

 public function Register(){
   return view('auth.auth-register');
 }

 public function authenticate(Request $req){
    $validator=Validator::make($req->all(),[
      'email' => 'required|email',
      'password' => 'required|min:6',

  ]);
    if($validator->passes()){

      $remember = $req->has('remember');

      if(Auth::Attempt(['email'=>$req->email,'password'=>$req->password])){
         return redirect()->route('admin.dashboard');

      }
      else{
         return redirect()->route('login')->with('error', 'Either email or password is incorrect.')->withInput(); 
      }
   }
   else{
   return redirect()->route('login')
   ->withInput()->withErrors($validator);
}
   
   
}
         

   




 

public function processRegister(Request $req){
   $validator=Validator::make($req->all(),[
      'name' => 'required|string|max:255',

      'email'=>'required|email|unique:users',

      'password' => 'required|confirmed|min:6',
      'role' => 'required|in:User,Admin' 



  ]);
  if($validator->passes()){
    $user = new User();
    $user->name=$req->name;
    $user->email = $req->email; 

    $user->password=Hash::make($req->password);
    $user->role = $req->role; 

    $user->save();
    return redirect()->route('login')->with('success','you have registed sucessfully.');
    }


  else{
     return redirect()->route('account.register')
     ->withInput()
     ->withErrors($validator);
  }
 
}

public function logout(){
   Auth::logout();
   return redirect()->route('login');
}



}
