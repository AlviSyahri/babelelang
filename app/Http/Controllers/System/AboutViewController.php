<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutViewController extends Controller
{
    public function AboutView(){
		return view('about');
	}
}
