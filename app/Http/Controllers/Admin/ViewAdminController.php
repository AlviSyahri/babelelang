<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewAdminController extends Controller
{
    public function AdminHomeView(){
		return view('admin.index');
	}
	
	public function LoginView(){
		return view('admin.login');
	}
	
	public function UserListView(){
		return view('admin.user_list');
	}
	
}
