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
	Route::get('', ['as' => 'products.index', 'uses' => 'ProductController@index']);
	Route::get('{url}', ['as' => 'products.show', 'uses' => 'ProductController@show']);
});

Route::group(['prefix' => 'cart'], function ()
{
	Route::put('', ['as' => 'cart.add', 'uses' => 'CartController@add']);
});

Route::get('contact', function ()
{
	return View::make('contact');
});

/* Admin */
Route::group(['prefix' => 'admin'], function ()
{
	/* API */
	Route::group(['prefix' => 'api'], function ()
	{
		Route::group(['prefix' => 'products'], function(){
			Route::get('', 'ProductApiController@index');
			Route::put('sort', 'ProductApiController@sort');
			Route::get('{id}', 'ProductApiController@show');
			Route::put('{id}', 'ProductApiController@update');
			Route::delete('{id}', 'ProductApiController@destroy');
			Route::post('', 'ProductApiController@store');
		});
	});

	/* Templates */
	Route::group(['prefix' => 'templates'], function(){
		Route::get('{name}', function($name){
			return View::make('admin.templates.'.$name);
		});
	});

	Route::get('{path?}', ['as' => 'admin', 'uses' => 'AdminController@index'])->where('path', '.+');

});

/* View Composer */
View::composer('layouts.partials.nav', 'App\Page\MenuComposer');


