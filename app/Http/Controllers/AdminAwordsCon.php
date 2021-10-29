<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAwordsCon extends Controller
{
    public function create(){
        return view('admin.aworde.create');
       }

    public function view(){
        return view('admin.aworde.view');
       }

    public function edit(){
        return view('admin.aworde.edit');
       }
}
