<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmClassCon extends Controller
{
    public function index(){
        return view('admin.classes.index');
    }

    public function create(){
        return view('admin.classes.create');
    }
}
