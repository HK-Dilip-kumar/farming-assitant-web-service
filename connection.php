<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="project";


$conn=new  mysqli($servername,$username,$password,$dbname);

// $q="Create Database project";

// $conn->query($q);

// if($conn->query($q))
// {
// 	echo "database Created";
// }
// else
// {
// 	echo "error".$conn->error;
// }
//  

 
if(@$_POST['submit'])
{
$name=$_POST['fname'];
$lastname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['pwd'];
$gender=$_POST['gender'];
  
 $q="insert into signin(name,lastname,username,password,gender) VALUES('$name','$lastname','$username','$password','$gender')";  
$conn->query($q);

if($conn->query($q))
{
	echo "query Created";
}
else
{
	echo "error".$conn->error;
} 
 

} 
?>