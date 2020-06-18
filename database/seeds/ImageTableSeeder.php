<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('images')->truncate();
        DB::table('images')->insert([
            'id' => 1,
            'name' => 'headphone',
            'product_id' => 1,
            'path' => asset('images/1.jpg'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('images')->insert([
            'id' => 2,
            'name' => 'headphone2',
            'product_id' => 2,
            'path' => asset('images/2.jpg'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);


        DB::table('images')->insert([
            'id' => 3,
            'name' => 'headphone3',
            'product_id' => 1,
            'path' => asset('images/3.jpg'),  
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);




    }
}
