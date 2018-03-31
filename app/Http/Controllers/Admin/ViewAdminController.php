<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewAdminController extends Controller
{
    public function AdminView(){
    	return view('admin/index');
    }
}
