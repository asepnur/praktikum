<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cookie_controller extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->helper(array('cookie','url'));
    }
	public function index()
	{
        // (cookie_name, cookie_value, time expired)
        set_cookie('name','raisa','3600');
        //load view
        $this->load->view('Cookie_view');
    }
	public function delete_cookie()
	{
        delete_cookie('name');
        $this->load->view('Cookie_view');
    }
    
}
