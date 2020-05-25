<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	 	 $this->load->model('user'); 
		$this->load->library('form_validation'); 
     	$this->load->library('session');
		$this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
		require_once APPPATH . '../vendor/autoload.php';
	}

  public function index()
  {
     $this->load->view('frontend/index');
  }

  
	
	

}
