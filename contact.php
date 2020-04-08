 <?php
include("dbconnect.php");
$note=$_REQUEST['note'];
?>
 <!DOCTYPE html>
<html>
<head>
	<title>FARMSEASY</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<style>

input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 4px;
}

	.ab{
		border: 4px;

	}
	*{
		margin: 0px;
		padding: 0px;
	}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color: #111;
}
.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
	<ul>
		  <li><a  href="#home">Home</a></li>
		  <li><a href="farmer_login.php">FARMER LOGIN</a></li>
		  <li><a href="admin_login.php">ADMIN LOGIN</a></li>
		  <li><a href="supplier_login.php">SUPPLIER LOGIN</a></li>
		  <li><a class="active" href="contact.php">CONTACT US</a></li>
		  <li><a href="about.php">ABOUT US</a></li>
		  <!-- <li style="padding-left: 48%;"><a style="color: yellow;" href="#">WANT  TO  COLLABORATE...?</a></li> -->
	</ul>
	<div id="page-wrap">
    <?PHP if($note=='success')
    {
    echo "<div class=\"success\">Form successfully submitted!</div>";
    }
?>

<h1 style="color: red; margin-left: 45%; border: 2px  solid red; margin-top: 20px; margin-right: 510px; padding-right: 20px;">CONTACT US </h1>

    <div id="contact-area" >
    	<DIV class="ab">
        <form method="post"  name="user"  action="user_process.php"  style="margin-left: 38%; margin-top: 20px;" >

           <div> <label for="Name" style="font-size: ">Name:</label> </div>
            <input type="text" name="name" id="Name"required="" placeholder="Your name" /><br><br>

        <div>    <label for="City">City:</label></div>
            <input type="text" name="city" id="City"required="" placeholder="City" /><br><br>

           <div> <label for="Email">Email:</label></div>
            <input type="text" name="email" id="Email" required="" placeholder="Email" /><br><br>

          <div>  <label for="Message">Message:</label><br /></div>
            <textarea name="message" rows="10" cols="50" id="Message.................." placeholder="My message" style="width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 4px; "></textarea><br><br>

            <input type="submit" name="submit" value="Submit" class="submit-button" required="" />
            <input type="reset" value="Reset">
        </form>

        <div style="clear: both;"></div>
    </div>

</div>
	</DIV>
	<img style="margin-top: 40px;" src="image/footer_image.PNG" width="100%" height="300px">
	
</body>
</html>