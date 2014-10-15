<?php
require_once APPPATH.'libraries/rest/REST_Controller.php';

class Restuarant extends REST_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index_get()
	{
		echo __FUNCTION__;	
	}
}