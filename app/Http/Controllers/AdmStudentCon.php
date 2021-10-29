<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmStudentCon extends Controller
{
    public function index(){
        return view('admin.student.index');
    }

    public function create(){
        return view('admin.student.create');
    }
}
