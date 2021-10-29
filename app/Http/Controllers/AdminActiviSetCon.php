<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminActiviSetCon extends Controller
{
    public function index(){
        return view('admin.activity.index');
       }

       public function create(){
        return view('admin.activity.create');
       }

       public function view(){
        return view('admin.activity.view');
       }

       public function edit(){
        return view('admin.activity.edit');
       }
}
