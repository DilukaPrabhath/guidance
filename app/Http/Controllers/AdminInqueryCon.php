<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;

class AdminInqueryCon extends Controller
{
    public function index(){
        return view('admin.inquery.index',compact('institute'));
       }

       public function create(){
        $institute = Institute::where('status',1)->get();
        return view('admin.inquery.create',compact('institute'));
       }

       public function store(Request $request){



       }

       public function view(){
        return view('admin.inquery.view');
       }

       public function edit(){
        return view('admin.inquery.edit');
       }
}
