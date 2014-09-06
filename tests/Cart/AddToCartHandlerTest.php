<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\App;
use Laracasts\TestDummy\DbTestCase;
use Laracasts\TestDummy\Factory;

class AddToCartHandlerTest extends DbTestCase {

	protected $handler;

	public function setUp()
	{
		parent::setUp();

		$this->handler = App::make('App\Cart\AddToCart\Handler');
	}

	/**
	 * @test
	 */
	public function it_should_add_product_to_cart()
	{
		$product = Factory::create('App\Product\Product');

		$command = $this->createCommand($product->id);

		$this->handler->handle($command);

		foreach (Cart::content() as $item)
		{
			$this->assertEquals($item->product->name, $product->name);
		}

	}

	/**
	 * @test
	 */
	public function it_should_update_product_if_same_product_exists()
	{
		$product = Factory::create('App\Product\Product');

		$command = $this->createCommand($product->id);

		$this->handler->handle($command);
		// Add same product to cart
		$this->handler->handle($command);

		$this->assertEquals(1, Cart::count(false));
	}

	/**
	 * @return stdClass
	 */
	protected function createCommand($id)
	{
		$command = new stdClass();
		$command->id = $id;
		$command->qty = 1;

		return $command;
	}

} 