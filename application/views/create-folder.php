<!Document html>
<html>
<head>
<title> Create Folder </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/upload-style.css">
</head>
<body class="bg-grn">

<?php echo $error;?> 
<?php echo form_open_multipart('index.php/create_folder/create'); ?>
 
<div class="form-container">
<h1> Create Folder </h1>
<form action = "" method="post">
<input type="text" name="fldrnm" Placeholder="Folder Name"/>
<br/><br/>
<input type="submit" name="crtfl" value=" Create "/>
</form>
</div>
</body>
</html>