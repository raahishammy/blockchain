<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Admin_Controller extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        if ( ! $this->session->userdata('isUserLoggedIn')){ 
            redirect('login');
        }
    }
}