<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmInstiCon extends Controller
{
    public function index(){
        return view('admin.institute.index');
       }
       public function create(){
        return view('admin.institute.create');
       }

       public function view(){
        return view('admin.institute.view');
       }

       public function edit(){
        return view('admin.institute.edit');
       }

}
