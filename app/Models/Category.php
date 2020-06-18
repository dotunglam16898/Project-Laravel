<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function products(){ // 1 danh mục có nhiều sản phẩm
    	return $this->hasMany(Product::class);
    }
}
