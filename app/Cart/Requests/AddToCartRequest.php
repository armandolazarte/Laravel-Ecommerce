<?php namespace App\Cart\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToCartRequest extends FormRequest {

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