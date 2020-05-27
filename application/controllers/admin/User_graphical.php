<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_graphical extends CI_Controller {
	 protected $id = NULL;
	 protected $user_id = NULL;
	function __construct()
	{
	  parent::__construct();
	  $this->load->helper('url');
      $this->load->helper('form');
      $this->load->library('form_validation');
  	  $this->load->model('user'); 
      $this->load->helper('cookie');
      $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
      require_once APPPATH . '../vendor/autoload.php';
	}
   
   public function graphical_tree()
   {
    	$user = $this->session->all_userdata();
	       if(!empty($user['id']))
	       {
	       	$graphicalUsers = $this->user->get_user_tree($user['id']);
	       	$this->load->view('admin/graphical/view',['user'=>$user,'sub_users'=>$graphicalUsers]);
	   	  }else{
	        redirect('logout');
	      }
   }
}

