<?php

 class Admin extends CI_Controller{
	 
	 public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url'));
		 $this->load->database(); 
		 $this->load->model('controll');
		 
      }
	 
	 
 public function index()
 {
	$this->load->view('admin');
 }
	
}

?>