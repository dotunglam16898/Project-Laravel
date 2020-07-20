<?php

namespace App\Models;
use App\Models\Product;
use App\User;
use App\Models\Order;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = "order_product";
}
