<?php
if(isset($_POST['submit']))
{
			$usr=$_POST['username'];
			$pwd=$_POST['password'];
			  if($usr=="admin" && $pwd=="admin")
			    header("Location: http://localhost/php_project/admin_login_.php");
			  else
			  ?><h1>OOPS!!!....WRONG DETAILS ENTERED</h1><br><?php	
			   ?><a href="admin_login.php">TRY AGAIN?</a><?php
			}


			
?>
