<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminComplaintsCon extends Controller
{
    public function create(){
        return view('admin.complain.create');
    }

    public function view(){
        return view('admin.complain.view');
    }

    public function edit(){
        return view('admin.complain.edit');
    }
}
