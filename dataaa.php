<?php

$conn=mysqli_connect("localhost","root","","project");
if(@$_POST['submit'])
{

	$name=$_POST['suppliername'];
	$address=$_POST['supplieraddress'];
	$mobno=$_POST['suppliermobile'];
	$pass=$_POST['supplierpassword'];
	$conpass=$_POST['supplierconfirmpassword'];
	$q="INSERT INTO regg(name,address,mob,pass,conpass)VALUES ('$name','$address','$mobno','$pass','$conpass')";
	$conn->query($q);
	if($conn->query($q))
	{
		echo "Values are inserted";
	}
	else
	{
		echo "Error";
	}
}
?>


