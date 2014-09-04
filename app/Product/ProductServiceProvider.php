<?php namespace App\Product;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider {


	public function register()
	{
		$this->app->bind('App\Product\Repositories\ProductRepositoryInterface', 'App\Product\Repositories\ProductRepository');
	}

}
