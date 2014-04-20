<?php namespace Ecommerce\Repositories;

use Illuminate\Http\Request;
use Ecommerce\Repositories\PageRepository;

class NavComposer{

	protected $request;
	protected $page;

	public function __construct(Request $request, PageRepository $page)
	{
		$this->request = $request;
		$this->page = $page;
	}
	
	public function compose($view)
	{
		$view->with('navs',$this->page->all($this->request->segment(1)));
	}

}