<?php

namespace App\Http\Controllers\Product_Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product_Category;


class CreateCategoryProductController extends Controller
{
    public function CreateCategory(Request $request){
    	$message = [
            'product_category_name.required'	=> 'Nama kategori tidak boleh kosong'
        ];
        $validator = Validator::make($request->all(),[
        	'product_category_name'		=>'required'
        ],$message);

        if($validator->fails()){
        	return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $category = new Product_Category;
        	$category->product_category_name=$request->product_category_name;
        	$category->flag_delete=0;
            $category->save();
        }
        return redirect('/admin');
	}    
}
