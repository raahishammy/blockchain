<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {
	 protected $id = NULL;
	 protected $user_id = NULL;
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	    $this->load->model('user'); 
		$this->load->library('form_validation'); 
		$this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
		require_once APPPATH . '../vendor/autoload.php';

	}
	
	public function index(){
	if($this->isUserLoggedIn){ 
            $this->load->view('users/dashboard');
        }else{ 
          $this->load->view('users/login');
           if($this->input->post('loginSubmit')){ 
                $this->login_post();
            }
      } 
	}

    public function login_post(){ 
       print_r($this->input->post());
       die();
    } 

      public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('users/login/'); 
    } 

    public function register_view(){
    	if($this->isUserLoggedIn){ 
            $this->load->view('users/dashboard');
        }else{ 
             $this->load->view('users/register');
             if($this->input->post('signupSubmit')){ 
                $this->register_post();
            }
        } 
    }


    public function register_post(){
      $data = $userData = array(); 
        if($this->input->post('signupSubmit')){ 
            $this->form_validation->set_rules('name', 'Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
            $this->form_validation->set_rules('contact', 'contact', 'required'); 
            $this->form_validation->set_rules('role', 'role', 'required'); 
            $this->form_validation->set_rules('country', 'country', 'required'); 
            $c_date =date("Y-m-d H:i:s");
            $userData = array( 
                'name' => strip_tags($this->input->post('name')), 
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($this->input->post('password')), 
                'contact' => strip_tags($this->input->post('contact')), 
                'role' => $this->input->post('role'),
                'country_code' => $this->input->post('country')
            ); 
            if($this->form_validation->run() == true){ 
                $insert = $this->user->insert($userData); 
                if($insert){ 
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.'); 
                    redirect('login'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
        $data['user'] = $userData; 
        $this->load->view('users/register', $data); 
    }

    public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'email' => $str 
            ) 
        ); 
        $checkEmail = $this->user->getRows($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    } 

}
