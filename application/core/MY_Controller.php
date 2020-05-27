<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Dummy_Controller extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('isUserLoggedIn')){ 
            redirect('dashboard');
        }
    }
}

require_once APPPATH . 'core/MY_Admin_Controller.php';