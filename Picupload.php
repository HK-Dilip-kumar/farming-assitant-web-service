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
  </head>
  <body>
    <h1></h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
	
</head>
<body>
	<table class="table">
		<?php


$servername="localhost";
$username="root";
$password="";
$dbname="project";


$conn=mysqli_connect($servername,$username,$password,$dbname);


		$q="select * from pic";
 		

		$query_num=mysqli_query($conn,$q);


		?>
  

  <thead class="thead-dark">
    <tr>
      <th scope="col"> Crop Id</th>
      <th scope="col">Crop Name</th>
      <th scope="col">Upload Image</th>
      <th scope="col">Quantity</th>

      
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
    <td><?php echo '<img src="upload/'.$row['img'].'" width="100px;" height="100px;">' ?></td>
    <td><?php echo $row['quantity'];  ?></td>
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
</body>
</html>