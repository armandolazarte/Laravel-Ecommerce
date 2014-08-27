<?php

use Ecommerce\Repositories\ProductRepositoryInterface;

class ProductsApiController extends \BaseController {

	protected $product;

	public function __construct(ProductRepositoryInterface $product)
	{

		$this->product = $product;

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = $this->product->all();
		return $items->toArray();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->product->find($id)->toArray();
	}


	/**
	 * Update a specified resource
	 *
	 * @param $id
	 * @return bool
	 */
	public function put($id)
	{
		$input = Input::only('active', 'image', 'name', 'price', 'url');

		$this->product->updateWithIdAndInput($id, $input);

		return ['success' => true];
	}



}
