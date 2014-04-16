<?php

namespace spec\Ecommerce\Repositories;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Ecommerce\Repositories\ProductRepository');
    }

    function it_returns_all_items()
    {
    	$this->getAll()->shouldReturn(['item 1','item 2']);
    }
}
