<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;
    protected $table= "mspicture";
    protected $primaryKey = "picture_id";

    public function product(){
        return $this->belongsTo('app\Model\Product','product_id','product_id');
    }
}
