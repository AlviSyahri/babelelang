<?php

namespace App\Http\Controllers\Admin\CategoryProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product_Category;

use Validator;
use Auth;
use DB;

class CreateCategoryProductController extends Controller
{
    public function AddCategoryView(){
		return view('admin.add_category');
	}

	public function AddCategory(Request $request){
		$message=[
			'category_name.required'	=>	'Nama Kategori Harus Di isi'
		];
		$validator = Validator::make($request->all(),[
			'category_name'				=>	'required',	
            'icon_name'             =>  'required'  				
    	],$message);


        if($validator->fails()){
        	return redirect()->back()
                     ->withErrors($validator)
                     ->withInput();
        }
        else{
        	$data = new Product_Category;
        	$data->category_name		=$request->category_name;
        	$data->flag_delete			=0;
        	$data->Created_by			=Auth::user()->nama;
        	$data->icon_name			=$request->icon_name;
			$data->save();
        }
        return redirect('/admin/category/add_category');
	}
}
