<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function ()
{
	return Redirect::to('products');
});

Route::group(array('prefix' => 'products'), function ()
{
	Route::get('', ['as' => 'products.index', 'uses' => 'ProductsController@index']);
	Route::get('{url}', ['as' => 'products.show', 'uses' => 'ProductsController@show']);
});

Route::get('contact', function ()
{
	return View::make('contact');
});

/* Admin */
Route::group(['prefix' => 'admin'], function ()
{

	Route::group(['prefix' => 'api'], function ()
	{
		Route::group(['prefix' => 'products'], function(){
			Route::get('', 'ProductsApiController@index');
			Route::get('{id}', 'ProductsApiController@show');
		});
	});

	Route::get('{path?}', ['as' => 'admin', 'uses' => 'AdminController@index'])->where('path', '.+');

});


