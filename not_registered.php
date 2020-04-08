
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
	
		?>	
			
			<h1 align="center">FARMER REGISTRATION FORM</h1>
			<form method="POST" action="connection.php">
				<table align="center" style="margin-top: 100px;border: 1px solid black;padding: 45px;">
					<tr>
						<td>NAME:</td>
						<td><input type="text" name="fname" required="required"></td>
					</tr>
					<tr>
						<td>LASTNAME:</td>
						<td><input type="text" name="lname" required="required"></td>
					</tr>
					<tr>
						<td>USERNAME:</td>
						<td><input type="text" name="username" required="required"></td>
					</tr>
					<tr>
						<td>PASSWORD:</td>
						<td><input type="text" name="pwd" required="required"></td>
					</tr>
					<tr>
						<td>GENDER:</td>
						<td><input type="radio" name="gender" value="male">MALE<input type="radio" name="gender" value="female">FEMALE</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit"></td>
					</tr>
				</table>
			</form>

		

?>
</body>
</html>