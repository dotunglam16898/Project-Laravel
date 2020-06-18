<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function images(){
    	return $this->hasMany(Image::class);
    }

    public function orders(){
        $this->belongsToMany(Order::class);
    }
}
