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
				'http://www.openlayers.org/api/OpenLayers.js',
				'assets/js/maps.js'
			);
		}
	}

} // End Website
