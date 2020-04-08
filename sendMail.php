<?php
if(isset($_POST['submit'])){
	//FETCH ALL VALUE FROM THE FORM
	$name=$_POST['name'];
	$add=$_POST['add'];
	$age=$_POST['age'];
	$idea=$_POST['idea'];

	$to="dilipkumar987654321@yahoo.com";
	$subject="collaboration frpm".$name;
	$message="<h2>I WANT TO COLLABORATE WITH US</h2>
				<h3>Name:".$name."</h3>
				<h3>Age:".$age."</h3>
				<h3>Address:".$add."</h3>
				<h3>Idea:".$idea."</h3>";

	$headers = "Content-Type:text/html;charset=utf-8"."\r\n";
	$headers .="from: ".$name."<".$add."<".$age."<".$idea;
	// $headers ="From: ".$name." < ".$add.">".$age.">".$idea.">";


	if(mail($to,$subject,$message,$headers))
	{
			echo "SENT succesfully...!!!";
	}
	else
	{
		echo "SORRRY...!!!";
	}
}
?>