<?php

namespace App\Models;
use App\Models\Product;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    // public function users(){
    // 	return $this->belongsTo(User::class);
    // }
}
