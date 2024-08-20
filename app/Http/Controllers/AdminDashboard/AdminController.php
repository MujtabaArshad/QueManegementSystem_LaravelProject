<?php
namespace App\Http\Controllers\AdminDashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller

{

  public function AdminDasbhoard(){
    
  return view('AdminDashboard.index');


}


}

    