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
     if(!empty($user['id'])){
     $this->load->view('admin/profile/profile_edit', ['user'=>$user]);
     }else{
      redirect('login');
     }
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
    if(!empty($user['id'])){
    $this->load->view('admin/profile/change_password', $user);
    }else{
      redirect('login');
    }
  }

  public function update_password()
  {
  $this->load->library('form_validation');
   if($this->input->post('changePswd'))
    {
      $this->form_validation->set_rules('password', 'old password', 'callback_password_check');
      $this->form_validation->set_rules('new_password', 'new password', 'required');
      $this->form_validation->set_rules('confirm_password', 'confirm password', 'required|matches[new_password]');
        if($this->form_validation->run() == false) {
          $this->session->set_flashdata('fail', $data);
          redirect('change_password');
         }
        else {
          $id = $this->session->userdata('id');
          $new_password = $this->input->post('new_password');
          $this->user->update_profile_info($id, array('password' => md5($new_password)));
          redirect('logout');
        }
   }
}

public function password_check($password)
    {
        $id = $this->session->userdata('id');
        $user = $this->user->get_userinfo($id);
        if($user->password !== md5($password)) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }
        return true;
    }
	

}
