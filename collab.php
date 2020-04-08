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
		  <li><a href="#home">HOME</a></li>
		  <li><a href="farmer_login.php">FARMER LOGIN</a></li>
		  <li><a href="admin_login.php">ADMIN LOGIN</a></li>
		  <li><a href="supplier_login.php">SUPPLIER LOGIN</a></li>
		  <li style="padding-left: 48%;"><a style="color: yellow;" href="collab.php">WANT  TO  COLLABORATE...?</a></li>
	</ul>
	<div align="center">
		<img  style="margin-top:0px;height: 200px;width:1000px;" src="image/punch.PNG">
	</div>
	<h1 align="center" style="color:purple;">COLLABORATE WITH US </h1>
	

	<form action="sendMail.php" method="post">
	<table border="2px solid black" style="margin-left: 40%;margin-top: 20px">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Idea:</td>
			<td><input type="text" name="idea"></td>
		</tr>
		<tr>
			<td>Age:</td>
			<td><input type="text" name="age"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="add"></td>
		</tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
		</td>
	</table>
	</form>

	<img style="margin-top: 40px;" src="image/footer_image.PNG" width="100%" height="300px">
	
</body>
</html>