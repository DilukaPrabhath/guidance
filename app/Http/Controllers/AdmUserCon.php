<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Institute;
use Illuminate\Validation\Rule;

class AdmUserCon extends Controller
{
   public function index(){
    return view('admin.user.index');
   }
   public function create(){
    return view('admin.user.create');
   }

   public function view(){
    return view('admin.user.view');
   }

   public function edit(){
    return view('admin.user.edit');
   }

   public function update_password(){
    return view('admin.user.password');
   }

   public function profileView(){
    return view('admin.profile.profile_view');
   }

   public function profileEdit(){
    return view('admin.profile.profile_update');
   }

   public function profilePassword(){
    return view('admin.profile.profile_pasword');
   }



}
