<?php 

   Class Controll extends CI_Model { 
	function __construct()
    {
    parent::__construct();
		
	$con = mysqli_connect("localhost","root","","filemanager");
    }
    
	 public function get_list()
	 {
	$ftdta=mysqli_query( $con," select * from document_details where status='0' ");
	$ftdtacn=count($ftdta);
	 $ftdtacns=0 ;
	while($ftdtad=mysqli_fetch_array($ftdta))
	{
	
	$flnme = $ftdtad['document_name'];
	$flnme1= substr($flnme,0,10);
	$flnme2= substr($flnme,-17,17);
	$tdtad=$ftdtad['upload_date'];
	$dats= date('d-m-Y',strtotime($tdtad));
?>
<tr> <td> <?php echo $ftdtacn=$ftdtacns+1; ?> </td>  <td> <a href="<?php echo base_url().'uploads/'.$flnme ; ?>" target="_blank"><?php echo $flnme1." ....".$flnme2 ; ?></a> </td>  <td> <?php echo $ftdtad['document_size']; ?> </td>  <td> <?php echo $ftdtad['uploaded_by']; ?> </td>  <td> <?php echo $dats ; ?> </td> <td> <a href="<?php echo base_url().'uploads/'.$flnme ; ?>" target="_blank"> Download </a></td></tr>
	
<?php  $ftdtacns=$ftdtacn; } }

public function registers()
{
$con = mysqli_connect("localhost","root","","filemanager");
$fnm= $_POST['fname'];
$lnm= $_POST['lname'];
$eml= $_POST['emailid'];
$pswd= $_POST['passwd'];
$rgdate=date("Y:m:d H:i:s");
$qrtest=mysqli_query($con,"insert into users values('','1','$fnm','$lnm','$eml','$pswd','$rgdate','0')");
if($qrtest === true){
$error =" Thanks for Registration ";
$this->load->view('register', $error);	
echo $error;
}else{
$error=" Try Again ";
$this->load->view('register', $error);
echo $error;
}
}

public function login() {
$condition = "email =" . "'" . $_POST['emailid'] . "' AND " . "password =" . "'" . $_POST['password'] . "'";
$this->db->select('*');
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}


}
public function login_check()
{
$con = mysqli_connect("localhost","root","","filemanager");
$data = array(
'email' => $this->input->post('emailid'),
'password' => $this->input->post('password')
);
$result = $this->controll->login();
if ($result == TRUE) {
$username = $this->input->post('emailid');
if ($result != false) {
$session_data = array(
'emailid' => $result[0]->email,
'user_id' => $result[0]->id,
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
$this->load->view('admin');
}
} else { 
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('login_form', $data);
}
echo "Welcome To login Validation";
}
}  

?>