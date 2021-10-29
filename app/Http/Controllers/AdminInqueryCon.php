<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminInqueryCon extends Controller
{
    public function index(){
        return view('admin.inquery.index');
       }

       public function create(){
        return view('admin.inquery.create');
       }

       public function view(){
        return view('admin.inquery.view');
       }

       public function edit(){
        return view('admin.inquery.edit');
       }
}
