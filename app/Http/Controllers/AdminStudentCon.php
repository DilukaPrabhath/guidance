<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStudentCon extends Controller
{
    public function index(){
        return view('admin.student.index');
       }

       public function create(){
        return view('admin.student.create');
       }

       public function view(){
        return view('admin.student.view');
       }

       public function edit(){
        return view('admin.student.edit');
       }
}
