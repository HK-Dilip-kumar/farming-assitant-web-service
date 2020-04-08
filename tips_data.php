<?php
$crname=$_POST['crop_name'];
$seas=$_POST['season'];
$sugg=$_POST['suggest'];

$con=mysqli_connect('localhost','root','','project');


$query="INSERT INTO tips ('cropname', 'season' , 'suggestion') VALUES ('$crname','$seas,'$sugg')";
$run=mysqli_query($con,$query);

		if($run==TRUE)
		{
			echo "data inserted";
		}
		else
		{
			echo "not inserted";
		}

?>