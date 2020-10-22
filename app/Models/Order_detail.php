<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    //
    protected $table = 'order_detail';

    public $timestamps = false;


    protected $fillable = ['order_id','product_id','price','quantity'];

    public function pro(){
	   		return $this->hasOne('\App\Models\Product','id','product_id');
	   }
	public function oders()
    {
        return $this->belongsTo('App\Models\Oders','order_id');
    }
}
