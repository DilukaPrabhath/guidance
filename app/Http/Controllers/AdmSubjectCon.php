<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmSubjectCon extends Controller
{
    public function index(){
        return view('admin.subject.index');
    }

    public function create(){
        return view('admin.subject.create');
    }
}
