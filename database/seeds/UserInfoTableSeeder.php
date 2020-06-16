<?php

use Illuminate\Database\Seeder;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('user_info')->truncate();
        DB::table('user_info')->insert([
        	'user_id' => '2',
        	'fullname' => 'Do Tung Lam',
        	'address' => 'Ha Noi',
        	'phone' => '0920200200',

 


        ]);
    }
}
