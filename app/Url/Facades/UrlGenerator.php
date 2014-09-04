<?php namespace App\Url\Facades;

use Illuminate\Support\Facades\Facade;

class UrlGenerator extends Facade {

	protected static function getFacadeAccessor() { return 'app.url.generator'; }

}