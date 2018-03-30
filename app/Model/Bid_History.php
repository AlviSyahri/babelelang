<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bid_History extends Model
{
     use SoftDeletes;
    protected $table= "msbid_history";
    protected $primaryKey = "history_id";

    public function user(){
        return $this->belongsTo('app\Model\User','user_id','user_id');
    }

    public function product(){
        return $this->belongsTo('app\Model\Product','product_id','product_id');
}
