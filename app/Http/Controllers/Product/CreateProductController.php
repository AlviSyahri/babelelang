<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\Picture;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use DB;

class CreateProductController extends Controller
{
	public function ViewCreateProduct(Request $request){
		$data=ProductCategory::Where('flag_delete',0)->get();
        return view('admin.Product.AdminCreateProduct',compact('data'));
	}

	public function CreateProduct(Request $request){
		$message=[
			'product_name.required'			=> 'Nama Produk Tidak Boleh Kosong',
			'product_description.required'	=> 'Deskripsi Produk Tidak Boleh Kosong',
			'start_price.required'			=> 'Harga Awal Tidak Boleh Kosong',
			'product_condition.required'	=> 'Kondisi Produk Tidak Boleh Kosong',
			'weight.required'				=> 'Massa Produk Tidak Boleh Kosong',
			'multiple_price.required'		=> 'Harga Kelipatan Tidak Boleh Kosong',
			'expired_bid.required'			=> 'Waktu Akhir Bid Tidak Boleh Kosong',
			'max_price.required'			=> 'Harga Maksimal Tidak Boleh Kosong',
		];
		$validator = Validator::make($request->all(),[
    		'product_name'					=>'required',
        	'product_description'	        =>'required|between:9,21',
    		'start_price'					=>'required',
    		'product_condition'				=>'required',
    		'weight'						=>'required',
    		'multiple_price'				=>'required',
    		'expired_bid'					=>'required',
    		'max_price'						=>'required'							
    	],$message);

		$imagevalidator = Validator::make($req->all(),[
            'picture_name' => 'mimes:jpeg,jpg,png,gif|max:25000',
        ],$message);

        if($validator->fails()){
        	return redirect()->back()
                     ->withErrors($validator)
                     ->withInput();
        }
        else{
            $filename = "";
            $path     ='Products/';
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

        	$product = new Product;
        	$product->product_name			= $request->product_name;
        	$product->product_description	= $request->product_description;
        	$product->start_price			= $request->start_price;
        	$product->product_condition		= $request->product_condition;
        	$product->weight				= $request->weight;
        	$product->multiple_price		= $request->multiple_price;
        	$product->expired_bid			= $request->expired_bid;
        	$product->max_price				= $request->max_price;
			$product->category_id 			= $request->category_id;
        	$product->Created_by			= Auth::user()->name;
            $product->flag_delete			= 0;
            $product->save();
            $picture = new Picture;
            $picture->picture_name			= $filename;
            $picture->product_id 			= $request->product_id;
            $picture->flag_delete			= 0;
            $picture->save();
        }
        return redirect('/product');
	}
}
