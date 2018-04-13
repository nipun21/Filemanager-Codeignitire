<html>
<head> 
      <title>Upload Form</title> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/upload-style.css"/>
   </head>
	
   <body class="bg-grn nt-cntr">  
   <div class="form-container">
      <h2>Your file was successfully uploaded!</h2>
		<ul> 
         <?php foreach ($upload_data as $item => $value): ?> 
         <li><?php echo $item; ?> : <?php echo $value; ?></li> 
		 <?php if($item == 'file_name'){ $fname= $value; echo $fname."<br/>";}elseif($item == 'file_size'){$fsize= $value; echo $fsize."<br/>";}elseif( $item == 'file_ext'){ $fext= $value; echo $fext."<br/>"; }
		 
?>         <?php endforeach; ?>
<?php
$con=mysqli_connect("localhost","root","","filemanager");
$upldt=date('Y:m:d H:i:s');
mysqli_query($con,"insert into document_details values('','52','$fname','$fsize KB','uploads/$fname','25','$upldt','$upldt','0')");

?>
      </ul>  
		<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>  
	  </div>
   </body>
	
</html>