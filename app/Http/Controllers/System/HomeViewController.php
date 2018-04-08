<?php

namespace App\Http\Controllers\System;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeViewController extends Controller
{
    public function HomeView(){
		return view('index');
	}
}
