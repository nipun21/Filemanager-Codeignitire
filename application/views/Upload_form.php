<!Document html>
<html>
<head>
<title> Upload File </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/upload-style.css">
</head>
<body class="bg-grn">
<?php $this->load->view('menu'); ?>

<?php echo $error;?> 
<?php echo form_open_multipart('upload/do_upload'); ?>
 
<div class="form-container">
<h1> Upload Files </h1>
<form action = "" method="post">
<input type="file" name="userfile"/>
<br/><br/>
<input type="submit" name="sbmfl" value=" Upload "/>
</form>
</div>
</body>
</html>