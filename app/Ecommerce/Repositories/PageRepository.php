<?php namespace Ecommerce\Repositories;

use Ecommerce\Page;

class PageRepository{


	public function all($active='')
	{
		$items = [];
		$product = new Page();
		$contact = new Page();

		$product->title = 'Products';
		$product->url = 'product';

		$contact->title = 'Contact';
		$contact->url = 'contact';

		$items[] = $product;
		$items[] = $contact;

		foreach($items as $item){
			$item->class = ($item->url==$active)?'active':'';
		}

		return $items;

	}

}