<?php namespace App\Page;

use Illuminate\Http\Request;

class MenuComposer{

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