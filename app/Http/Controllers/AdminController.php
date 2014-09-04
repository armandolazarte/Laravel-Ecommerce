<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.index');
	}


}
