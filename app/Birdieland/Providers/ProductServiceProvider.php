<?php namespace Birdieland\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider {


	public function register()
	{
		$this->app->bind('Birdieland\Repositories\ProductRepositoryInterface', 'Birdieland\Repositories\ProductRepository');
	}

}
