<?php

use App\Product\Product;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Product::create([
				'name' => $faker->name,
				'url' => uniqid(),
				'image' => 'http://lorempixel.com/640/480/food/',
				'price' => $faker->randomFloat(2, 1,99),
				'order' => 0,
				'active' => 1
			]);
		}
	}

}