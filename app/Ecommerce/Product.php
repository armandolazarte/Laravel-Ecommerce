<?php namespace Ecommerce;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent {

	protected $fillable = ['name', 'url', 'image', 'price', 'order', 'active'];

	protected $table = 'products';

}