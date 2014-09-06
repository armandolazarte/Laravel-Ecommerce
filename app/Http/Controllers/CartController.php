<?php namespace App\Http\Controllers;

use App\Cart\AddToCart\Request as AddToCartRequest;
use App\Cart\RemoveFromCart\Request as RemoveFromCart;
use App\Cart\Steps;
use App\Cart\UpdateCart\Request as UpdateCart;
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

	/**
	 * @param RemoveFromCart $request
	 * @return mixed
	 */
	public function delete(RemoveFromCart $request)
	{
		$this->execute($request);

		return Redirect::back()->withSuccess('Item has been removed from the cart.');
	}

	/**
	 * @param UpdateCart $request
	 * @return mixed
	 */
	public function update(UpdateCart $request)
	{
		$this->execute($request);

		// Either proceed to next screen or stay on the current screen
		$action = $request->get('action');
		if ($action == Steps::CHECKOUT)
		{
			return Redirect::route('cart.user');
		} else
		{
			return Redirect::back()->withSuccess('Your shopping cart has been updated.');
		}

	}

	public function user()
	{
		return View::make('cart.user');
	}


	/**
	 * @return mixed
	 */
	public function index()
	{
		return View::make('cart.index');
	}

}