<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Website {

	// protected $page_titles = array(
	// 		'home' => 'OSM Indonesia',
	// 	);

	public function action_load()
	{
		$page = $this->request->param('page', 'home');

		if (isset($this->page_titles[$page]))
		{
			// Use the defined page title
			$title = $this->page_titles[$page];
		}
		else
		{
			// Use the page name as the title
			$title = str_replace('_', ' ', $page);
		}

		$this->template->title   = $title;
		$this->template->content = View::factory("pages/$page")->render();
	}
	
	public function action_location()
	{
		$page = $this->request->param('page', 'home');

		if (isset($this->page_titles[$page]))
		{
			// Use the defined page title
			$title = $this->page_titles[$page];
		}
		else
		{
			// Use the page name as the title
			$title = str_replace('_', ' ', $page);
		}

		$this->template->title   = $title;
		$this->template->content = View::factory("pages/locations/$page")->render();
	}

} // End Page