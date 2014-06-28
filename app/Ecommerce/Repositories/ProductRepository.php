<?php namespace Ecommerce\Repositories;

use Ecommerce\Product;
use Illuminate\Config\Repository;

class ProductRepository implements ProductRepositoryInterface{

	protected $product;
	protected $config;
	
	public function __construct(Product $product, Repository $config)
	{
		$this->product = $product;
		$this->config = $config;
	}

	public function all($columns = array('*'))
	{

	}

    public function newInstance(array $attributes = array())
    {

    }

	public function paginate($perPage = 0)
	{
		$perPage = $perPage?$perPage:$this->config->get('product.perPage');
		return $this->product->paginate($perPage);
	}

	public function create(array $attributes)
	{

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

    }

    public function destroy($id)
    {

    }

}