<?php
class restuarant_service{
	function __construct()
	{
		$this->ci =&get_instance();
		$this->em = $this->ci->doctrine->getEntityManager();
	}
	
	function search_restuarants()
	{
		//echo __FUNCTION__;
		return $this->em->getRepository('Nonveg\Entity\Restuarant')->findAll();
	}
	
	function save_restuarant($restuarant)
	{
		/*
		 * (
			    [name] => Eat Some
			    [address] => Baner
			    [pincode] => 411045
			)
		 */
		
		$restuarantObj = new Nonveg\Entity\Restuarant();
		$restuarantObj->setName($restuarant['name']);
		$restuarantObj->setAddress($restuarant['address']);
		$restuarantObj->setPincode($restuarant['pincode']);
		$this->em->persist($restuarantObj);
		$this->em->flush();
		
		return true;
	}


	function attach_menu_to_restaurant($resturant_object, $menu_item_obkect)
	{
		$resRepo = $this->em->getRepository("Dealvector\Entity\Restuarnt");
		$resRepo->attachMenu($menu_item_obkect);
		return true;
	}

	function attach_image_to_menu_item($menu_item_obj, $image_location)
	{
		$menu_item_obj->setImageLocation($image_location);

		return true;
	}
}
