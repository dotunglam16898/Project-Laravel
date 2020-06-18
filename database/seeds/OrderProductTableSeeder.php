<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    	$limit = 5;
    	for ($i = 0; $i < $limit; $i++) {
    		DB::table('order_product')->insert([
    			'order_id' => $faker->randomDigitNot(0),
    			'product_id' => $faker->randomDigitNot(0),
    			
    			'created_at' => \Carbon\Carbon::now(),
    			'updated_at' => \Carbon\Carbon::now()
    		]);
    	}
    }
}
