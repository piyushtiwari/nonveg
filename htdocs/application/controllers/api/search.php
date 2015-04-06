<?php
require_once APPPATH.'libraries/rest/REST_Controller.php';

class Search extends REST_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->ci = &get_instance();
		$this->load->library('restuarant_service');
	}
	
	function index_get($id=null)
	{
		echo __FUNCTION__;
		$restuarants = $this->ci->restuarant_service->list_restuarants($id);
		
		echo "<pre>";
		print_r($restuarants);
		//$this->response($restuarants);
	}
}