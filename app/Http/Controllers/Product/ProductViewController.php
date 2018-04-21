<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductViewController extends Controller
{
	public function ViewProduct(){
		return view('product.product');
	}

	public function AddProduct(){
		return view('product.addProduct');
	}
}
