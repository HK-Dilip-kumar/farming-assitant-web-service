<?php
if(isset($_POST["submit"]))
{
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$conn=new mysqli($servername,$username,$password,$dbname); 
// tune yahan se data send kiya hai?
$supplier_name=$_POST['suppliername'];
$supplier_address=$_POST['supplieraddress'];
$mobno=$_POST['suppliermobile'];
$password=$_POST['supplierpassword'];
$confirmpassword=$_POST['supplierconfirmpassword'];

$q="INSERT INTO supplier (Name,Address,mobno,password,confirm) VALUES('$supplier_name','$supplier_address','$mobno','$password','$confirmpassword')";
$conn->query($q);
if($conn->query($q))
{
	echo "Values Inserted into the table";
}
else
{
	echo "Reinsert the values";
}
// $q="CREATE TABLE  supplier
// (id int(10) primary key auto_increment,
// Name varchar(20) not null,
// Address varchar(20) not null,
// mobno int(10) not null,
// password int(40) not null)";
// $conn->query($q);
// if($conn->query($q))
// {
// 	echo "Table created";
// }
// else
// {
// 	echo "Error";
// }
// $q="create database project";
// $conn->query($q);
// if($conn->query($q))
// {
// 	echo "Database created";
// }
// 	else
// 	{
// 		echo "Errror";
// 	}
}
?>