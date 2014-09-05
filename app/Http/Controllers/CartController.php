<?php namespace App\Http\Controllers;

use App\Cart\AddToCart\Request as AddToCartRequest;
use App\Cart\RemoveFromCart\Request as RemoveFromCart;
use App\Http\ExecutableTrait;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class CartController extends Controller {

	use ExecutableTrait;

	/**
	 * @param AddToCartRequest $request
	 * @return mixed
	 */
	public function add(AddToCartRequest $request)
	{

		$this->execute($request);

		return Redirect::back()->withSuccess('Item has been added to the cart.');

	}

	public function delete(RemoveFromCart $request)
	{
		$this->execute($request);

		return Redirect::back()->withSuccess('Item has been removed from the cart.');
	}

	/**
	 * @return mixed
	 */
	public function index()
	{
		return View::make('cart.index');
	}

}