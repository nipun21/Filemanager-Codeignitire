<?php

class Create_folder extends CI_Controller {
	public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url'));
		 $this->load->database(); 
		 $this->load->model('controll');
        }
public function index()
{
$this->load->view('create-folder');
}
public function create()
{
$flnme=$_POST['fldrnm'];
$fchk=mkdir("uploads/".$flnme);
}
}
