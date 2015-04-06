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
	
	function index_get($id=null)
	{
		//echo __FUNCTION__;
		$restuarants = $this->ci->restuarant_service->list_restuarants($id);
		
		echo "<pre>";
		print_r($restuarants);
		//$this->response($restuarants);
	}
	
	function index_post()
	{
		echo __FUNCTION__;
		$restuarant = $this->post('restuarant');
		
		if( $this->ci->restuarant_service->save_restuarant($restuarant) ){
			echo "Restuarant Added Successfully";
		}
		
		echo "<pre>";
		print_r($restuarants);
		//$this->response($restuarants);
	}

    function menu($menu_id)
    {
        echo __FUNCTION__;
		die;
    }
}