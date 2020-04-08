<!DOCTYPE html>
<html>
<head>
	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title></title>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
  height:auto;
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
	<table class="table">
		<?php


$servername="localhost";
$username="root";
$password="";
$dbname="project";


$conn=mysqli_connect($servername,$username,$password,$dbname);


		$q="select * from crop";
 		

		$query_num=mysqli_query($conn,$q);


		?>
  

  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Crop Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Upload Image</th>
      <th scope="col">Cost</th>
      


      
  </thead>

  <tbody>
  	<?php
  	if(mysqli_num_rows($query_num)>0)
  	{
  		while($row= mysqli_fetch_assoc($query_num))
  		{
  			?>

  		


  	
    <tr>
      
      <td><?php echo $row['id']; ?></td>
	  <td><?php echo $row['name'];  ?></td>
    <td><?php echo $row['crop'];  ?></td>
    <td><?php echo $row['quantity'];  ?></td>
    <td><?php echo '<img src="upload/'.$row['uploadimage'].'" width="100px;" height="100px;">' ?></td>
    <td><?php echo $row['rupees'];  ?></td>
    
      
      
      
     
    </tr>
    <?php
}
}
else
{
	echo "no record";
}
  ?>
</tbody>
    
</table>
</div>
</div>
</div>

</body>
</html>