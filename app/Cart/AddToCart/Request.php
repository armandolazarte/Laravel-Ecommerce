<?php namespace App\Cart\AddToCart;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest {

	public function rules()
	{
		return [
			'qty' => 'required|integer',
			'id' => 'required|integer'
		];
	}

	public function authorize()
	{
		return true;
	}

} 