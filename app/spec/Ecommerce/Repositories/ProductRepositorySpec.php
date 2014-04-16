<?php

namespace spec\Ecommerce\Repositories;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Ecommerce\Product;
use Illuminate\Config\Repository;

class ProductRepositorySpec extends ObjectBehavior
{

	function let(Product $product, Repository $config)
	{
		$this->beConstructWith($product, $config);
	}


    function it_is_initializable()
    {
        $this->shouldHaveType('Ecommerce\Repositories\ProductRepository');
    }

    function it_returns_all_items()
    {
    	$this->getAll();
    }
}
