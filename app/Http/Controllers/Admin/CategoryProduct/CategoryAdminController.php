<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryAdminController extends Controller
{
    public function CategoryListView(){
		return view('admin.category_list');
	}
	
	public function AddSubCategoryView(){
		return view('admin.add_sub_category');
	}
}
