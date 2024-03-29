<?php namespace App\Http\Controllers;

use App\Product\Repositories\ProductRepositoryInterface;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class ProductController extends Controller {

	protected $product;

	public function __construct(ProductRepositoryInterface $product)
	{

		$this->product = $product;

	}

	/**
	 * Display a listing of products
	 *
	 * @return Response
	 */
	public function index()
	{

		$items = $this->product->paginate();

		return View::make('products.index', compact('items'));
	}

	/**
	 * Show the form for creating a new product
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('products.create');
	}

	/**
	 * Store a newly created product in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Product::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Product::create($data);

		return Redirect::route('products.index');
	}

	/**
	 * Display the specified product.
	 *
	 * @param  string $url
	 * @return Response
	 */
	public function show($url)
	{
		$item = $this->product->findByURL($url);

		return View::make('products.show', compact('item'));
	}

	/**
	 * Show the form for editing the specified product.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);

		return View::make('products.edit', compact('product'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Product::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Product::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$product->update($data);

		return Redirect::route('products.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Product::destroy($id);

		return Redirect::route('products.index');
	}

}