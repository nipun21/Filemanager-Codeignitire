<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title> Admin Dashboard </title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/upload-style.css"/>
</head>
<body class="bg-grn">

<div class="containrer">
<div class="row">
<div class="col-sm-12"> 
<br/>
&nbsp; &nbsp;
<br/>
</div>
</div>
</div>

<div class="containrer">
<div class="row">
<div class="col-sm-3"> 
<ul class="sdbr"> 
<li><a href="http://localhost/test-web/index.php/admin/"> Dashboard </a></li>
<li><a href="http://localhost/test-web/index.php/upload/"> Upload File </a></li>
<li><a href="#"> Folder </a>
<ul> <li> <a href="#"> All Folders </a></li>
<li> <a href="#"> Create Folder </a></li> </ul></li>
<li><a href="http://localhost/test-web/index.php/admin/"> Check Files</a></li>
<li><a href="#"> Profile </a></li>
</ul>
 </div>
<div class="col-sm-7">
<div class="liost-container"> 
<table class="table lstl">
<tr>
<th>  S.No. </th> <th>  File Name </th> <th> File Size </th><th> Uploaded By </th> <th> Uploaded Date</th> <th> Download </th>
</tr>

<?php

$this->load->model('controll');
$this->controll->get_list();

?>
</table>
</div>

</div>


</div>
</div>   
   
   
   
   
   <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</html>

