<?php namespace Ecommerce\Repositories;

use Ecommerce\Page;

class PageRepository{


	public function all($active='')
	{
		$items = [];
		$product = new Page();
		$contact = new Page();
		$admin = new Page();

		$product->title = 'Products';
		$product->url = 'products';

		$contact->title = 'Contact';
		$contact->url = 'contact';

		$admin->title = 'Admin';
		$admin->url = 'admin';

		$items[] = $product;
		$items[] = $contact;
		$items[] = $admin;

		foreach($items as $item){
			$item->class = ($item->url==$active)?'active':'';
		}

		return $items;

	}

}