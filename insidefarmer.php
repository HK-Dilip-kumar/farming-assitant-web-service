<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project";


$conn=new  mysqli($servername,$username,$password,$dbname);

// $q="CREATE TABLE complaint(
//  id int(10) primary key auto_increment,
//  complaintid  int(20) NOT NULL,
//  complaint varchar(100) NOT NULL

//  )"; 

// $conn->query($q);

// if($conn->query($q))
// {
//   echo "table Created";
// }
// else
// {
//   echo "error".$conn->error;
// } 
if(isset($_POST['submit']))
{
$product_name=$_POST['complainid'];
$product_price=$_POST['address'];
 $q="INSERT into complaint(complaintid,complaint)VALUES('$product_name','$product_price')";


$conn->query($q);

 //  if($conn->query($q))
 //  {
 //  echo "Complain  Submitted";
 // }
 //  else
 //  {
 //    echo "error".$conn->error;
 //  }

}
?>
<!DOCTYPE html>
<html>
<head>

	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
.hero-image {
  background-image: url("image/unnamed.jpg");
  background-color: #cccccc;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.over-img{
	background-image: url("image/Capture.PNG");
    position: absolute;
    height: 300px;
    width: 1200px;
    
    background-position: center;
    margin-left: 150px;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 20px;
    border-radius: 10px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  border-radius: 10px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 42px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: green;
}

.active {
  background-color: ;
}

.nav-bar
{
	margin-top: 300px;
	border-radius:10px;
}
/*column division*/
.column {
  float: left;
  width: 32%;
  padding: 5px;
  background-color: red;
  float: left;
  border-radius: 10px;
  height: 200px;
  border-style: groove;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.main
{
	height:200px;
	border-style: groove;
	background-color:white;
}
.column1
{
	margin:20px;
	border-style: groove;
	width: 33.3%;
	height: 50px;

}
.column2
{
	float:left;
	border-style:groove;

}

	</style>
	<title></title>
</head>
<body>

	<div class="hero-image">
 	<div class="over-img">

		
		<div class="nav-bar">
		<ul>
 		 <li><a class="" href="insidefarmer.php">Complaint Page</a></li>
       <li><a href="register.php">view Comaplaint Status</a></li>
       <li><a href="farmertips.php">Farming Tips</a></li>
         <li><a href="sellcrops.php">Sell Crops</a></li>
         <li><a href="cropdetail.php">Buyer detail</a></li>
          <li><a href="farmer_login.php">Logout</a></li>
         
         </ul>

         <div class="main">
          <h1 align="center">complaint page</h1>
      <form method="POST" action="#">
        <table align="center" style="margin-top: 0px;border:  px solid black;padding: 45px; margin-left: 430px; padding-top: 20px">
          <tr>
            <td>Complaint ID:</td> 
            <td><input type="text" name="complainid" required=""></td>
          </tr>
          <tr>
            <td>Complaint:</td>
            <td><textarea name="address" rows="3" cols="20" placeholder=""></textarea>

</td>

          </tr>
          <tr>
            <center><td><input type="submit" name="submit" value="submit"></td></center>  
          </tr>
         	
         	

         </div>
         <!-- three column -->
         <!-- <div class="row">
   		 <div class="column">
    	 <img src="project/farmer.webp" alt="Snow" style="width:100% " >
    	 <a href="#">Farmer Login</a>
  		 </div>
  		<div class="column">
    	<img src="project/.png" alt="Forest" style="width:100%">
    	<a href="#">Admin  Login</a>
  		</div>
  		<div class="column">
    	<img src="img_mountains.jpg" alt="Mountains" style="width:100%">
    	<a  href="#">Supplier Login</a>
  		</div> -->
</div>
</div>


	</div>
	</div>
	</div>
</body>
</html>