<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class User_info extends Model
{
    protected $table = 'user_info';

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
