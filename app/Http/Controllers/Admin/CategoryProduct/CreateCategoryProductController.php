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
			'category_name'				=>	'required'					
    	],$message);

    	$imagevalidator = Validator::make($req->all(),[
            'icon_name' => 'mimes:jpeg,jpg,png,gif|max:25000',
        ],$message);

        if($validator->fails()){
        	return redirect()->back()
                     ->withErrors($validator)
                     ->withInput();
        }
        else{
            $filename = "";
            $path     ='Categorys/';
            $image = $req->file('image');

            if($req->hasfile('image')){
                if($imagevalidator->fails()){
                    return redirect()
                        ->back()
                        ->withErrors($imagevalidator)
                        ->withInput();
                }
                else{
                    $filename       = $image->getClientOriginalName();
                    $image->move($path, $filename);
                }
            }
        	$data = new Product_Category;
        	$data->category_name		=$request->category_name;
        	$data->flag_delete			=0;
        	$data->Created_by			=Auth::user()->name;
        	$data->icon_name			=$filename;
        }
        return redirect('/admin/category/add_category');
	}
}
