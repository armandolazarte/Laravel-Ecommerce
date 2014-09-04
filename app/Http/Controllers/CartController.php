<?php namespace App\Http\Controllers;

use App\Cart\Requests\AddToCartRequest;
use Illuminate\Routing\Controller;

class CartController extends Controller {


	public function add(AddToCartRequest $request)
	{
		//$input = Input::only(['id', 'qty']);

		//return Redirect::back();

	}

}