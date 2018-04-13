<?php

Class Jobs extends CI_controller {
public function index() {
$this->load->helper('url'); 
$this->load->database();
$this->load->view('jobs');
//echo "Job Post testing";
}

}