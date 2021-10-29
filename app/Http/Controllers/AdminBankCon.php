<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBankCon extends Controller
{
    public function create(){
        return view('admin.bank.create');
       }

       public function edit(){
        return view('admin.bank.edit');
       }
}
