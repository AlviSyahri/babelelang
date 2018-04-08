<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryAdminController extends Controller
{
    public function CategoryListView(){
		return view('admin.category_list');
	}
	
	public function AddCategoryView(){
		return view('admin.add_category');
	}
	
	public function AddSubCategoryView(){
		return view('add.add_sub_category');
	}
}
