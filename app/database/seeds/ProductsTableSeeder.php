<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Ecommerce\Product;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Product::create([
				'name' => $faker->name,
				'image' => 'http://lorempixel.com/640/480/food/',
				'order' => 0,
				'active' => 1
			]);
		}
	}

}