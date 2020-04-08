<html>
<head>
	<link rel="stylesheet" href="sup.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color:white">
	<div class="picture">
		<img src="image\punch.png" class="img" >
		<div class="bar">
		<!-- <ul>
		<li><a class="active" href="supplier_add.php" style="text-decoration: none">Post Advertisment</a></li>
		<li><a href="crop.php" style="text-decoration: none">Crop Recieved</a></li>
		<li><a href="index.php" style="text-decoration: none">Logout</a></li>
	</ul> -->
</div>
<br><br><br><br>
     <div class="col-lg-6 m-auto" style="border:15px solid black">
		
		<form method="POST" action="dataaa.php" autocomplete="off" style="background-color:white">
			<div>
				<h2>Registration Form</h2> 
			</div>
		
			<!-- <div class="from-group">
				<label for="name"><b>Supplier Id:</b></label
				<input type="text" name="supplierid" id="supplierid" class="form-control">
			</div -->
			<div class="from-group">
				<label for="name"><b><strong>Supplier Name:</strong><b></label>
				<input type="text" name="suppliername" id="suppliername" class="form-control" required>
			</div>
			<div class="from-group">
				<label for="address"><b>Supplier Address:</b></label>
				<input type="text" name="supplieraddress" id="" class="form-control" required>
			</div>
			<div class="from-group">
				<label for="mob"><b>Mobile No:</b></label>
				<input type="text" name="suppliermobile" id="suppliermobile" min="10" max="10" class="form-control" required>
			</div>
			<div class="from-group">
				<label for="pass"><b>Password:</b></label>
				<input type="password" name="supplierpassword" id="supplierpassword" class="form-control" required>
			</div>
			<div class="from-group">
				<label for="conpass"><b>Confirm Password:</b></label>
				<input type="password"  name="supplierconfirmpassword" id="supplierconfirmpassword" class="form-control" required>
			</div>
			<br>
			<!-- <button type="submit" class="btn btn-success" style=" width:100%;color:white;background-color:#186A3B;box-sizing:border box;padding:10px 5px;border-radius:5px;">Send</button>
			<br><br> -->
				<strong><input type="submit" name="submit" value="SUBMIT" style="width:740px;"></strong>
		</form>
	</div>
     </div>
	</div>
	</div>

</body>
</html>








