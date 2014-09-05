<?php

use App\Http\ExecutableTrait;

class ExecutableTraitTest extends TestCase {

	use ExecutableTrait;

	/**
	 * @test
	 */
	public function it_should_find_handler_by_request()
	{
		$request = new \App\Cart\AddToCart\Request();

		$handler = $this->toCommandHandler($request);

		$this->assertInstanceOf('App\Cart\AddToCart\Handler', $handler);
	}

	/**
	 * @test
	 */
	public function it_should_throw_exception_if_handler_not_found()
	{
		$this->setExpectedException('App\Http\HandlerNotRegisteredException');

		$this->toCommandHandler(new stdClass());
	}

} 