<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="sup.css">
	<style>
		form{
		margin-left: 400px;
		}

	</style>
	<title>SUPPLIER LOGIN....</title>
</head>
<body>
	<body style="background-color:white">
	<div class="picture">
		<img src="image\punch.png" class="img" >
		<div class="bar">
		<ul>
		<li><a class="active" href="supplier_add.php" style="text-decoration: none">Post Advertisment</a></li>
		<li><a href="crop.php" style="text-decoration: none">Crop Recieved</a></li>
		<li><a href="index.php" style="text-decoration: none">Logout</a></li>
	</ul>
</div>
<h1 align="center" style="margin-top: 75px;">SUPPLIER SIGN UP FORM</h1>
	<form action="dataaa.php" method="post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<table border="5 px solid black" style="padding:5px;background-color:;width: 55%;margin-top: 10%"> 
				<tr>
					<td>NAME</td><td><input type="text" name="suppliername" >
					<span class = "error">* <?php echo $nameErr;?></span></td>
				</tr>
				<tr>
					<td>ADDRESS</td><td><input type="number" name="suppliermobile"></td>
				</tr>
				<tr>
					<td>MOBILE</td><td><input type="number" name="suppliermobile"></td>
				</tr>
				<tr>
					<td>PASSWORD</td><td><input type="password" name="supplierpassword"></td>
				</tr>
				<tr>
					<td>CONFIRM PASSWORD</td><td><input type="password" name="supplierconfirmpassword"></td>
				</tr>
				<tr>
					<td colspan="2"><input style="margin-left: 175px;" type="submit" name="submit" value="submit"></td>
				</tr> 
			</table>     
	</form>
</body>
<html>