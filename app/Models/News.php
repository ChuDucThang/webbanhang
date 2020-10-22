<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public $timestamps = false;

    protected $fillable = ['title','image','description', 'content', 'status' ,'created_at'];
}
