<?php namespace App\User\Register;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest {

	public function rules()
	{
		return [
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed',
			'password_confirmation' => 'required'
		];
	}

	public function authorize()
	{
		return true;
	}

} 