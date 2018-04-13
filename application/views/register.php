<!Document html>
<html>
<head>
<title> Registeration Form </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/upload-style.css">
</head>
<body class="bg-grn">

<div class="form-container">
<span> <?php echo $error; ?> </span>
<?php echo form_open_multipart('index.php/register/registers');?>
<h1> Register Now </h1>
<form action = "" method="post">
<input type="text" name="fname" placeholder="First Name"/>
<br/><br/>
<input type="text" name="lname" placeholder="Last Name"/>
<br/><br/>
<input type="email" name="emailid" Placeholder="Email Id"/>
<br/><br/>
<input type="password" name="passwd" Placeholder="Password"/>
<br/><br/>
<input type="submit" name="crtfl" value=" Register "/>
</form>
</div>

</body>
</html>