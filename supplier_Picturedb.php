<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
$cropid=$_POST['cropid'];
$cropname=$_POST['cropname'];
$uploadimage=$_FILES['myfile']['name'];
$quan=$_POST['quant'];
if(file_exists("upload/".$_FILES["myfile"]["name"]))
{
	echo "File Exists";
}
else
{
$q="INSERT INTO pic(id,name,img,quantity)VALUES('$cropid','$cropname','$uploadimage','$quan')";
$conn->query($q);
if($conn->query($q))
{
	move_uploaded_file($_FILES["myfile"]['tmp_name'], "upload/".$_FILES["myfile"]["name"]);
	echo "Crop Added";

}
else
{
    echo "Error in uploading file   ".$conn->error;
}
}
}
?>
