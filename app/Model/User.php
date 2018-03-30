<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table= "msuser";
    protected $primaryKey = "user_id";

    public function product(){
        return $this->hasMany('app\Model\Product','user_id','user_id');
    }

    public function bidhistory(){
        return $this->hasMany('app\Model\Bid_History','user_id','user_id');
    }
}
