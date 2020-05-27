<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {
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
	
    public function index_get()
    {
         $this->load->view('frontend/index');
    }

    public function index()
    {
	   if($this->isUserLoggedIn){ 
            $this->load->view('admin/dashboard/index');
        }else{ 
          $this->load->view('admin/login');
           if($this->input->post('loginSubmit')){ 
                $this->login_post();
            }
      } 
	 }

    public function login_post()
    { 
      $email = trim($this->input->post('email'));
      $password = md5($this->input->post('password'));
      $query = $this->user->processLogin($email,$password);
       $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
       $this->form_validation->set_rules('password', 'password', 'required'); 
       $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
       $this->form_validation->set_message('required', 'Enter %s');
        if($this->form_validation->run() == true){ 
              if($query){
                  $query = $query->result();
                  $user = array(
                   'id' => $query[0]->id,
                   'name' => $query[0]->name,
                   'email' => $query[0]->email,
                   'contact' => $query[0]->contact,
                   'country_code' => $query[0]->country_code,
                   'role' => $query[0]->role
                  );
                  $this->load->library('session');
                  $this->session->set_userdata($user);
                  redirect('dashboard');
             }
        }else{
           $this->session->set_flashdata('fail', 'Invalid Email or Password.');
          redirect('login');
        }
    } 

    public function logout()
    { 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('login'); 
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
            $this->session->set_flashdata('fail', 'The given email already exists.');
                    redirect($_SERVER['HTTP_REFERER']);
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    } 

    public function dashboard_view()
    {
        $user = $this->session->all_userdata();
        if(!empty($user['id'])){
         $this->load->view('admin/dashboard/index',['user'=>$user]);
        }else{
          redirect('login');
        }
     }

     public function affilate_load()
     {
      $user = $this->session->all_userdata();
       if(empty($user['id'])){
      $id = $this->uri->segment(2);
        $data = $this->user->get_user_by_encrypted_id($id);
        if($data){
            $cookie= array(
                'name'   => 'sponser_id',
                'value'  => $data[0]->id,
                'expire' => '3600'
            );
            $this->input->set_cookie($cookie);
            $this->load->view('admin/register');
        }else{
            echo "Not a valid referral link.";
        }
      }else{
        redirect('logout');
      }
     }

     public function affilate_register()
     {
       $data = $userData = array(); 
        if($this->input->post('signupSubmit') && $this->input->post('sponser_id') !=""){ 
            $this->form_validation->set_rules('name', 'Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('contact', 'contact', 'required'); 
            $this->form_validation->set_rules('role', 'role', 'required'); 
             $c_date =date("Y-m-d H:i:s");
            $pswd = $this->generateRandomString(8);
            $userData = array( 
                'parent_id' => $this->input->post('sponser_id'),
                'name' => strip_tags($this->input->post('name')), 
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($pswd), 
                'contact' => strip_tags($this->input->post('contact')), 
                'role' => $this->input->post('role')
            ); 
            if($this->form_validation->run() == true){ 
                $insert = $this->user->insert($userData); 
                if($insert){ 
                    $insert_id = $this->db->insert_id();
                    $referalId = md5($insert_id);
                    $subject = "Referal Link";
                    $referallink  = site_url().'referral/'.$referalId;
                    $message = "<html><body><span>Hello ".strip_tags($this->input->post('name')). ",</br>
                    Welcome to Blockhain and congratulations on becoming a  member</br>
                    Referral link:  " . $referallink . "</br>
                    Email Address:  " . strip_tags($this->input->post('email')) . "</br>
                    Password: " . $pswd . "</br>
                    </span></body></html>";
                    $to = $this->input->post('email');
                    $this->send_message($subject, $message, $to);
                    $this->session->set_flashdata('success', 'Your account registration has been successful. Please login to your account.');
                    redirect('login'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                    $this->session->set_flashdata('fail', 'Some problems occured, please try again.');
                    redirect($_SERVER['HTTP_REFERER']);
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
                 $this->session->set_flashdata('fail', 'Please fill all the mandatory fields.');
                redirect($_SERVER['HTTP_REFERER']);
            } 
        } 
        $data['user'] = $userData; 
        redirect($_SERVER['HTTP_REFERER'], $data);
    }


    public function send_message($subject, $message, $to) {
        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
        $to = $to;
        $subject = $subject;
        $message = $message;
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
       if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

    // Genrate random string for password and email code
    public function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
