<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller{

	public function index()
	{
		return View::make('home');
	}
} 