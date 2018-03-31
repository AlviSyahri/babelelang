<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginAdminController extends Controller
{
    public function LoginView(){
    	return view('admin/login');
    }
}
