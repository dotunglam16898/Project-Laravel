<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
