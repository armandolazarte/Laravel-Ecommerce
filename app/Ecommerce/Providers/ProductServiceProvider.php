<?php namespace Ecommerce\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider {


	public function register()
	{
		$this->app->bind('Ecommerce\Repositories\ProductRepositoryInterface', 'Ecommerce\Repositories\ProductRepository');
	}

}
