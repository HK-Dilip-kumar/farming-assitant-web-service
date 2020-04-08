<!DOCTYPE html>
<html>
<head>
	<title>FARMSEASY</title>
<style>
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
		  <li><a class="active" href="#home">HOME</a></li>
		  <li><a href="farmer_login.php">FARMER LOGIN</a></li>
		  <li><a href="admin_login.php">ADMIN LOGIN</a></li>
		  <li><a href="supplier_login.php">SUPPLIER LOGIN</a></li>
		  		  <li><a href="about.php">ABOUT US</a></li>
		  <li style="padding-left: 38%;"><a style="color: yellow;" href="collab.php">WANT  TO  COLLABORATE...?</a></li>
	</ul>
	<div align="center">
		<img  style="margin-top:0px;height: 200px;width:1000px;" src="image/punch.PNG">
	</div>
	<div style="margin-top:0px;border: 2px solid white;width: 800px;height: 280px;margin-left: 350px">
		<div style="float: left;">
				<a href="farmer_login.php"></ABBR><img style="padding-left: 40px;padding-top: 30px;" src="image/farmer_1.png" height="200px" width="200px;"></a><br>
				<h3 style="padding-left: 100px;"><a style="text-decoration: none;color: black;" href="farmer_login.php">FARMER's LOGIN</a></h3>
		</div>
		<div style="float: left;">
				<a href="admin_login.php"><img style="padding-left: 40px;padding-top: 30px;" src="image/admin.jfif" height="200px" width="200px;"></a><br>
				<h3 style="padding-left: 75px;"><a style="text-decoration: none;color: black;" href="admin_login.php">ADMIN LOGIN</a></h3>
		</div>
		<div style="float: left;">
				<a href="supplier_login.php"><img style="padding-left: 40px;padding-top: 30px;" src="image/supplier.png" height="200px" width="200px;"></a><br>
				<h3 style="padding-left: 70px;"><a style="text-decoration: none;color: black;" href="supplier_login.php">SUPPLIER LOGIN</a></h3>
		</div>
	</div>
	<img style="margin-top: 40px;" src="image/footer_image.PNG" width="100%" height="300px">
	
</body>
</html>