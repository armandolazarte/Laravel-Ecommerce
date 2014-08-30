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
		return $this->product->orderBy('order')->get();
	}

	public function newInstance(array $attributes = array())
	{

	}

	public function paginate($perPage = 0)
	{
		$perPage = $perPage ? $perPage : $this->config->get('product.perPage');

		return $this->product->orderBy('order')->paginate($perPage);
	}

	public function create(array $attributes)
	{
		$product = $this->product->fill($attributes);
		$product->url = UrlGenerator::generate($product);
		$product->image = asset('assets/images/logo.png');
		$product->save();

		return $product->where('id', $product->id)->first();
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

	public function sort(Array $ids)
	{
		$count = 0;

		foreach ($ids as $id)
		{
			$this->product->where('id', $id)->update(['order' => $count]);
			$count++;
		}
	}
}