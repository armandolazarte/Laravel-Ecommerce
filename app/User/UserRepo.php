<?php namespace App\User;

class UserRepo {

	public function save($email, $password)
	{
		return User::create(['email' => $email, 'password' => $password]);
	}


} 