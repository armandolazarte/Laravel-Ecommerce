<?php namespace Ecommerce\Url;

use Illuminate\Support\ServiceProvider;

class UrlServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->singleton('ecommerce.url.generator', function ()
		{
			return new UrlGenerator();
		});
	}

} 