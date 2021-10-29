<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminApplicationCon extends Controller
{
    public function index(){
        return view('admin.application.index');
       }

       public function create(){
        return view('admin.application.create');
       }

       public function view(){
        return view('admin.application.view');
       }

       public function edit(){
        return view('admin.application.edit');
       }
}
