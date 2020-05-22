<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 protected $id = NULL;
	 protected $user_id = NULL;
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

  public function profile()
  {
     $this->load->library('session');
     $user = $this->session->all_userdata();
     $this->load->view('admin/profile/profile_edit', $user);
  }

  public function change_password()
  {
    $user = $this->session->all_userdata();
    $this->load->view('admin/profile/change_password', $user);
  }
	
	

}
