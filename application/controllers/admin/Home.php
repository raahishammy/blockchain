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
     $this->load->view('admin/profile/profile_edit', ['user'=>$user]);
  }

  public function profile_update()
  {
  	$id = $this->input->post('user_id');
  	$this->form_validation->set_rules('name', 'Name', 'required'); 
    $this->form_validation->set_rules('email', 'Email', 'required'); 
    $this->form_validation->set_rules('contact', 'contact', 'required');
     if($this->form_validation->run() == TRUE){ 
     	$data = array( 
                'name' => $this->input->post('name'), 
                'email' => $this->input->post('email'), 
                'contact' => $this->input->post('contact')
            );
    	$this->session->set_userdata($data);
    	$this->user->update_profile_info($id, $data);
    	redirect('profile');
    }else{
    	 $data['error_msg'] = 'Please fill all the mandatory fields.'; 
    }
  }

  public function change_password()
  {
    $user = $this->session->all_userdata();
    $this->load->view('admin/profile/change_password', $user);
  }
	
	

}
