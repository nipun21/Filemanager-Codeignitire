<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: http://localhost/test-web/index.php/user_authentication/user_login_process");
}
?>
<head>
<title>Login Form</title>

<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"> -->

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/upload-style.css"/>
</head>
<body class="bg-grn">
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
<div class="form-container">
<h2>Login Form</h2>
<hr/>
<br /><br />
<?php echo form_open('index.php/login/login_valid'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>

<label>Email Id :</label>
<input type="email" name="emailid" id="name" placeholder="Email Id"/><br /><br />
<label>Password :</label>
<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
<input type="submit" value=" Login " name="submit"/><br /><br />
<a href="<?php echo base_url() ?>index.php/register/" style="color:#fff;">To SignUp Click Here</a>
<?php echo form_close(); ?>
</div>
</body>
</html>