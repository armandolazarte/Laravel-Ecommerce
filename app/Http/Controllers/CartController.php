<?php namespace App\Http\Controllers;

use App\Cart\AddToCart\Request;
use App\Http\ExecutableTrait;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller {

	use ExecutableTrait;

	public function add(Request $request)
	{

		$this->execute($request);

		return Redirect::back()->withSuccess('Item has been added to the cart.');

	}

}