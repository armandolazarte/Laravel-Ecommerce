<?php namespace Birdieland\Repositories;

class ProductRepository implements ProductRepositoryInterface{
	
	public function getAll()
	{
		return ['item 1','item 2'];
	}

}