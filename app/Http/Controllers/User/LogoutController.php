<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\User;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function doLogout(){
    	Auth::logout();
    	return redirect(url('/home'));
    }
}
