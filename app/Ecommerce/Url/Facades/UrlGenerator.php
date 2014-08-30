<?php namespace Ecommerce\Url\Facades;

use Illuminate\Support\Facades\Facade;

class UrlGenerator extends Facade {

	protected static function getFacadeAccessor() { return 'ecommerce.url.generator'; }

}