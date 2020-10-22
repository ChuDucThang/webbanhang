<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    public $timestamps = false;

    protected $fillable = ['order_note', 'amount','status','username','email','phone','address','created_at','user_id'];

    public function detail(){
	   	return $this->hasMany('\App\Models\Order_detail','order_id','id');
	   }

	public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
