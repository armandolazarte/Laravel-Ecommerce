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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

/* Products */
Route::group(array('prefix' => 'products'), function ()
{
	Route::get('', ['as' => 'products.index', 'uses' => 'ProductController@index']);
	Route::get('{url}', ['as' => 'products.show', 'uses' => 'ProductController@show']);
});

/* Cart */
Route::group(['prefix' => 'cart'], function ()
{
	Route::get('', ['as' => 'cart.index', 'uses' => 'CartController@index']);
	Route::put('', ['as' => 'cart.add', 'uses' => 'CartController@add']);
	Route::get('remove', ['as' => 'cart.delete', 'uses' => 'CartController@delete']);
	Route::post('update', ['as' => 'cart.update', 'uses' => 'CartController@update']);

	// Step 1: Register or Login or skip ( if logged in )
	Route::get('user', ['as' => 'cart.user', 'uses' => 'CartController@user']);

});


Route::get('contact', function ()
{
	return View::make('contact');
});

/* Users */
Route::get('register', ['as' => 'user.register', 'uses' => 'UserController@register']);
Route::put('save', ['as' => 'user.save', 'uses' => 'UserController@save']);

/* Admin */
Route::group(['prefix' => 'admin'], function ()
{
	/* API */
	Route::group(['prefix' => 'api'], function ()
	{
		Route::group(['prefix' => 'products'], function ()
		{
			Route::get('', 'ProductApiController@index');
			Route::put('sort', 'ProductApiController@sort');
			Route::get('{id}', 'ProductApiController@show');
			Route::put('{id}', 'ProductApiController@update');
			Route::delete('{id}', 'ProductApiController@destroy');
			Route::post('', 'ProductApiController@store');
		});
	});

	/* Templates */
	Route::group(['prefix' => 'templates'], function ()
	{
		Route::get('{name}', function ($name)
		{
			return View::make('admin.templates.' . $name);
		});
	});

	Route::get('{path?}', ['as' => 'admin', 'uses' => 'AdminController@index'])->where('path', '.+');

});

/* View Composer */
View::composer('layouts.partials.nav', 'App\Page\MenuComposer');


