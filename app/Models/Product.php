<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = false;

    protected $fillable = ['name','image','description', 'price','price_sale', 'type', 'status', 'created_at', 'category_id'];


    public function cat(){
    	return $this->hasOne('\App\Models\Category','id','category_id');
    }
}

