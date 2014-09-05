<?php namespace App\Cart\RemoveFromCart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Laracasts\Commander\CommandHandler;

class Handler implements CommandHandler {

	/**
	 * Handle the command
	 *
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{
		Cart::remove($command->rowId);
	}
}