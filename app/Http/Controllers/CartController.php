<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class CartController extends Controller {


	public function add()
	{
		$input = Input::only(['id', 'qty']);

		return Redirect::back();

	}

}