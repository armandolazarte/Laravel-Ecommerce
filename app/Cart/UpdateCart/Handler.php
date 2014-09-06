<?php namespace App\Cart\UpdateCart;

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
		// Stop here if item is not array
		if (!isset($command->item) || !is_array($command->item)) return;

		// Loop through line items and update the qty
		foreach ($command->item as $rowId => $qty)
		{
			Cart::update($rowId, $qty);
		}

	}
}