<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Ecommerce\Product;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Product::create([
				'name' => $faker->name,
				'image' => 'http://lorempixel.com/640/480/food/',
				'price' => $faker->randomFloat(2, 1,99),
				'order' => 0,
				'active' => 1
			]);
		}
	}

}