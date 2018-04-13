<?php
class Login extends CI_Controller {
	
public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url'));
		 $this->load->database(); 
		 $this->load->model('controll');
        }
		
public function index(){
error_reporting(0);
$this->load->view('login_form');
}
public function login_valid(){
$this->controll->login_check();
}

}

?>