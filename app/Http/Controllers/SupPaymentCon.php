<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupPaymentCon extends Controller
{
    public function index(){
        return view('superadmin.paytable');
    }

    public function create(){
        return view('superadmin.paycreate');
    }
}
