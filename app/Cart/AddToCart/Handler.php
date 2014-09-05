<?php namespace App\Cart\AddToCart;

use App\Product\Repositories\ProductRepository;
use Gloudemans\Shoppingcart\Facades\Cart;
use Laracasts\Commander\CommandHandler;

class Handler implements CommandHandler{

	/**
	 * @var ProductRepository
	 */
	private $productRepository;

	public function __construct(ProductRepository $productRepository)
	{

		$this->productRepository = $productRepository;
	}
	
	/**
	 * Handle the command
	 *
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{
		// Find product by id
		$product = $this->productRepository->find($command->id);

		// Add to Cart object
		Cart::associate('Product', 'App\Product')->add($product->id, $product->name, $command->qty, $product->price);
	}
}