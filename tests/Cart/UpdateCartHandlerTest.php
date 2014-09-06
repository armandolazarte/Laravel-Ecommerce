<?php


use App\Cart\UpdateCart\Handler;
use Gloudemans\Shoppingcart\Facades\Cart;

class UpdateCartHandlerTest extends Testcase {

	protected $handler;

	public function setUp()
	{
		parent::setUp();

		$this->handler = new Handler();
	}

	/**
	 * @test
	 */
	public function it_should_not_update_cart_if_input_format_incorrect()
	{
		$command = new stdClass();

		$this->handler->handle($command);
	}

	/**
	 * @test
	 */
	public function it_should_update_cart()
	{
		$command = new stdClass();
		$command->item = [
			'foo' => 'bar'
		];
		Cart::shouldReceive('update')->once()->with('foo', 'bar');
		$this->handler->handle($command);

	}

} 