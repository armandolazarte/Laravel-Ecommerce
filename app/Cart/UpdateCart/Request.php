<?php namespace App\Cart\UpdateCart;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest {

	public function rules()
	{
		return [
			'item'   => 'required',
			'action' => 'required'
		];
	}

	public function authorize()
	{
		return true;
	}
} 