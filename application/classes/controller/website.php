<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller_Template {

	public function before()
	{
		parent::before();
		
		if ($this->auto_render)
		{
			$this->template->styles = array(
				'assets/css/master.css' => 'screen',
				'assets/css/ie.css' => 'screen'
			);

			$this->template->scripts = array(
				'assets/js/jquery.min.js',
				'assets/js/jquery.custom.js',
				'assets/js/modestmaps.min.js',
				'assets/js/wax.mm.min.js',
				'assets/js/maps.js'
			);
		}
	}

} // End Website
