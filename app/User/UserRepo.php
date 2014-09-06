<?php namespace App\User;

class UserRepo {

	public function create($email, $password)
	{
		return User::register(get_defined_vars());
	}


} 