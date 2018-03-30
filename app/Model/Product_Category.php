<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_Category extends Model
{
    use SoftDeletes;
    protected $table= "msproduct_category";
    protected $primaryKey = "category_id";

    public function product(){
        return $this->hasMany('app\Model\Product','category_id','category_id');
    }

}
