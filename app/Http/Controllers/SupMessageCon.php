<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupMessageCon extends Controller
{
   public function index(){
       return view('superadmin.messall');
   }
}
