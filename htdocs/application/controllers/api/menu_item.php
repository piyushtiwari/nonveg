<?php
require_once APPPATH.'libraries/rest/REST_Controller.php';

class Menu_item extends REST_Controller
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
        $menu_items = $this->ci->restuarant_service->list_menu_items($id);

        echo "<pre>";
        print_r($menu_items);
        //$this->response($menus);
    }

    function index_post()
    {
        echo __FUNCTION__;
        //$menu_item = $this->post('menu_item');
        //print_r($menu_item);die;
        if( $this->ci->restuarant_service->save_restuarant($menu_items) ){
            echo "Menu Item Added Successfully";
        }

        echo "<pre>";
        print_r($menu_item);
        //$this->response($restuarants);
    }
}