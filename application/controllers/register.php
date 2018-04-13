<?php
class Register extends CI_Controller {
	
public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url'));
		 $this->load->database(); 
		 $this->load->model('controll');
        }
		
public function index(){
error_reporting(0);
$this->load->view('register');
}
public function registers(){
	error_reporting(0);
$this->controll->registers();
}}

?>