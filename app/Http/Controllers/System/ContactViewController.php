<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactViewController extends Controller
{
    public function viewcontact(){
    	return view('admin/contact');
    }

}
