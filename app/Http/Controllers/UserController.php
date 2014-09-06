<?php namespace App\Http\Controllers;

use App\Http\ExecutableTrait;
use App\User\UserRepo;
use Illuminate\Routing\Controller;
use App\User\Register\Request as RegisterRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class UserController extends Controller {

	use ExecutableTrait;

	/**
	 * @var UserRepo
	 */
	private $userRepo;

	public function __construct(UserRepo $userRepo)
	{

		$this->userRepo = $userRepo;
	}
	
	public function register()
	{
		return View::make('user.register');
	}

	public function save(RegisterRequest $request)
	{

		$user = $this->execute($request);

		return Redirect::home()->withSuccess('Welcome!');
	}

} 