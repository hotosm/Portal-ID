<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller_Template {

	public function before()
	{
		parent::before();
		
		if ($this->auto_render)
		{
			$this->template->styles = array(
				'assets/css/style.css' => 'screen',
				'assets/css/master.css' => 'screen',
				'assets/css/wax-controls.css' => 'screen'
			);

			$this->template->scripts = array(
				'assets/js/libs/jquery-1.6.2.min.js',
				'assets/js/mylibs/modestmaps.min.js',
				'assets/js/mylibs/wax.mm.min.js',
				'assets/js/maps.js',
				'assets/js/scripts.js',
			);
		}
	}

} // End Website
