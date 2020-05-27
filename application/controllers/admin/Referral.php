<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Referral extends CI_Controller {
	 protected $id = NULL;
	 protected $user_id = NULL;
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user'); 

	  	require_once APPPATH . '../vendor/autoload.php';
	}

 
  public function referral_update()
  {
  	$id = $this->uri->segment(3);
  	$data = $this->user->get_user($id);
	  	if($data)
	  	{
	  		$referalId = rtrim(strtr(base64_encode($id), '+/', '-_'), '=');
	  		$this->user->update_referal($id, $referalId);
	     
	  	}else{
	  		echo "No user found";
	  	}
  }

  public function load_referral()
  {
  	 $user = $this->session->all_userdata();
     $this->load->view('admin/referral/view',['user'=>$user]);
  }
}
