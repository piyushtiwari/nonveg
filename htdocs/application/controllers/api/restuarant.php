<?php
require_once APPPATH.'libraries/rest/REST_Controller.php';

class Restuarant extends REST_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->ci = &get_instance();
		$this->load->library('restuarant_service');
	}
	
	function index_get()
	{
		echo __FUNCTION__;
		$this->ci->restuarant_service->list_restuarants();
	}
}