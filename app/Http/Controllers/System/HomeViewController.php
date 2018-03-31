<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeViewController extends Controller
{
      public function HomeView(){
    	return view('index');
    }
}
