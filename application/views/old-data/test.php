<!DOCTYPE html> 
<html lang = "en"> 

 <head> 
 <meta charset = "utf-8"> 
 <title> Header Title of Blog Post</title> 
 </head>
	
 <body style="max-width:800px;"> 
   <?php error_reporting(0); if(isset($_POST['add'])){
	   echo $_POST['breadcrumb'];
   } ?>
   <!--
   <header>  <h2 style="margin-left:10%;">This is Sample post Title </h2> <span style="float:right; margin-right:59%;margin-top:-10px;"> <a href="#"> Home </a> >> <a href="#"> Category</a> </span> </header> 
   <p> &nbsp; &nbsp; </p>
      <p><h4>This is Body part of  Wordpress Blog Post</h4></p>
	  -->
 <form name="menu" method="post" > <table> <tr><td> Page Name <input type="text" name="breadcrumb"/></td> <td> <input type="submit" name="add" value="Add Menu"/> </td></tr></table></form>
 </body>
 </html>

