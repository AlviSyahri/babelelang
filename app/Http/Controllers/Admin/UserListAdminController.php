<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserListAdminController extends Controller
{
    public function UserListView(){
    	return view('admin/user_list');
    }
}
