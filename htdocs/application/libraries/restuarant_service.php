<?php
class restuarant_service{
	function __construct()
	{
		$this->ci =&get_instance();
		$em = $this->ci->doctrine->getEntityManager();
	}
	
	function list_restuarants()
	{
		echo __FUNCTION__;
	}
}