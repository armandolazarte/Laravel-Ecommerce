<?php namespace Ecommerce\Repositories;

use Illuminate\Http\Request;

class NavComposer{

	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}
	
	public function compose($view)
	{
		$items = [];
		$current = $this->request->segment(1);
		foreach(['product' => 'Products','contact' => 'Contact'] as $key => $i){
			$item['name'] = $i;
			$item['uri'] = $key;
			$item['class'] = $key==$current?'active':'';
			$items[] = $item;
		}
		$view->with('navs',$items);
	}

}