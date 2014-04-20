<?php namespace Ecommerce;

class Page {

	protected $title;
	protected $url;
	protected $class;

	public function __set($name, $value)
	{
		$this->$name = $value;
	}

	public function __get($name)
	{
		return $this->$name;
	}

}