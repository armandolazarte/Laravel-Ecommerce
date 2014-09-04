<?php namespace App\Url;

use Illuminate\Support\ServiceProvider;

class UrlServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->singleton('app.url.generator', function ()
		{
			return new UrlGenerator();
		});
	}

} 