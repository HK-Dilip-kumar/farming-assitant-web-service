<?php 

$to="shubhammishra221298@gmail.com";
$subject=" Response from website";
$message=" welcome  to  php";
$header="From: shubhamcsemishra@gmail.com";

if(mail($to,$subject,$message,$header))
{
	echo "Mail send successfully";
}
else
{
	echo"cannot send mail";
}


?>