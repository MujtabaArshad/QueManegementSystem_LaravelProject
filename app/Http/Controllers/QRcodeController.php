<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Http\RedirectResponse;

class QRcodeController extends Controller
{
    public function branchOptions()
{
   return view('CRUD.option-show');


   
}
}
