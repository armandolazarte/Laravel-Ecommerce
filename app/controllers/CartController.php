<?php

class CartController extends \BaseController {


	public function add()
	{
		$input = Input::only(['id', 'qty']);

		Cart::add('293ad', 'Product 1', 1, 9.99, array('size' => 'large'));

		return Redirect::back();

	}

}