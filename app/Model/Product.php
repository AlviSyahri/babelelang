<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table= "msproduct";
    protected $primaryKey = "product_id";

    public function productcategory(){
        return $this->belongsTo('app\Model\Product_Category','category_id','category_id');
    }

    public function picture(){
    	return $this->hasMany('app\Model\Picture',
    		'product_id','product_id');
    }
    
}
	