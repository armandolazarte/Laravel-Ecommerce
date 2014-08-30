<?php namespace Ecommerce\Repositories;

use Ecommerce\Product;
use Ecommerce\Url\Facades\UrlGenerator;
use Illuminate\Config\Repository;

class ProductRepository implements ProductRepositoryInterface {

	protected $product;
	protected $config;

	public function __construct(Product $product, Repository $config)
	{
		$this->product = $product;
		$this->config = $config;
	}

	public function all($columns = array('*'))
	{
		return $this->product->all();
	}

	public function newInstance(array $attributes = array())
	{

	}

	public function paginate($perPage = 0)
	{
		$perPage = $perPage ? $perPage : $this->config->get('product.perPage');

		return $this->product->paginate($perPage);
	}

	public function create(array $attributes)
	{
		$product = $this->product->fill($attributes);
		$product->url = UrlGenerator::generate($product);
		$product->save();

		return $product;
	}

	public function find($id)
	{

		return $this->product->findOrFail($id);

	}

	public function findByURL($url)
	{
		return $this->product->where('url', '=', $url)->firstOrFail();
	}

	public function updateWithIdAndInput($id, array $input)
	{
		$this->find($id)->update($input);
	}

	public function destroy($id)
	{
		$this->find($id)->delete();
	}

}