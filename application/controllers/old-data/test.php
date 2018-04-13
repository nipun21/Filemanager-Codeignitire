<?php

Class Test extends CI_controller {
public function index() {
$this->load->view('test');
}
public function hello(){
$this->load->view('bread');
}
public function postf() {
$this->load->view('test');
$this->load->database();
if(isset($_POST['add'])){
	   echo $_POST['breadcrumb'];
   }
$data = array('pstid' => '', 'breadcrumb' => 'home');
$status=$this->db->insert("stud", $data);
if($status='1'){$message='<font style="color:green;">Success</font>'; 
}else{ 
$message='<font style="color:red;">Failed</font>';
}
echo $message;
}
}