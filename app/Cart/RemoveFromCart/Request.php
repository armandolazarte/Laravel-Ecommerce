<?php namespace App\Cart\RemoveFromCart;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest {

	public function rules()
	{
		return [
			'rowid' => 'required'
		];
	}

	public function authorize()
	{
		return true;
	}

} 