<?php namespace App\Http\Controllers;

use App\Cart\Requests\Request;
use Illuminate\Routing\Controller;

class CartController extends Controller {


	public function add(Request $request)
	{
		$input = Input::only(['id', 'qty']);

		//

		//return Redirect::back();

	}

}