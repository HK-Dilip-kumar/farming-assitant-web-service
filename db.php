 <?php
 if(isset($_POST["submit"]))
 {
 	$conn=mysqli_connect('localhost','root','','project');
	// $name=$_POST['suppliername'];
 // 	$address=$_POST['supplieraddress'];
 // 	$mob=$_POST['suppliermobile'];
 // 	$pass=$_POST['supplierpassword'];
 // 	$confirm=$_POST['supplierconfirmpassword'];

 // 	$q="INSERT INTO `supplier`(`Name`, `Address`, `mobno`, `password`, `confirm`) VALUES ('$name','$address','$mob',$pass','$confirm')";
 // 	$data=mysqli_query($conn,$q);
 // 	if($data==TRUE)
 // 	{
 // 		echo "Value inserted";
 // 	}
 // 	else
 // 	{
 // 		echo "Error";
 // 	}
 // }

 	if($con)
 	{
 		echo "database connected";
 	}
 	else
 	{
 		echo "....";
 	}
 }
 ?>
rukk ek mint
yeh dekh ruk


