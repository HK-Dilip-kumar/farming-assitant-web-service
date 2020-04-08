<html>
<head></head>
<style>
	
	body
	{
		background-image:url("image/bg.jpg");
	}
	*
	{
		margin:0px;
		padding:0px;
	}
	.picture
	{
		height:1000px;
		background-image: image\bg.jpg;
	}
	.img
	{
		height:270px;
		width:100%;
		border-radius:10px;
	}
	.bar
	{
		height:40px;
		width:100%;
		background-color:black;
		padding:14px 16px;
	}
	
	ul
	{
		list-style-type: none;
		margin:0;
		padding:0;

	}
	li
	{
		float:left;
	}
	li a
	{
		display:block;
		color:white;
		text-align:center;
		padding:15px 18px;
		background:black;
		text-decoration:none;
	}
	li a:hover:not(.active)
	{
		background-color:#273746;
	}
	.active
	{
		background-color:#4CAF50;
	}
	.form
	{
		text-align:center;
		height:600px;
		width:600px;
		border-style:groove;
		margin-left: 400px;
		background-color: #28B463;
	}
	input[type=text],input[type=number]
	{
		width:80%;
		color:black;
		padding:10px 5px;
		box-sizing: border-box;
		background-color:#B3B6B7;
		border: 4px solid black;
        border-radius: 5px;  
	}
	input[type=submit],input[type=file]
	{
		width:80%;
		color:white;
		background-color:#186A3B;
		box-sizing:border box;
		padding:10px 5px;
		border-radius:5px;
	}
	input[type=button]
	{
		width:60%;
		color:black;
		background-color:;
		box-sizing:border box;
		padding:10px 5px;
		border:4px solid black;
		border-radius:5px;
	}
	p
	{
		color:black;
	}
</style>
<body background-image="image\bg.jpg">
	<div class="picture">
		<img src="image\punch.png" class="img" >
		<div class="bar">
		<ul>
		<li><a class="active" href="supplier_Pictureupload.php">Post Advertisment</a></li>
		<li><a href="Picupload.php">Crop Recieved</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
</div>
     <div class="form">
     	<form method="post" autocomplete="off" action="supplier_Picturedb.php" enctype="multipart/form-data">
     		<br><br>
     		<h1 style="text-align:center">Post Addvertisment</h1>
     		<br><br>
     		<p><b>Crop Id:<b></p>
     		<br>
     		<input type="number" name="cropid" id="cropid">
     		<br><br>
     		<p><b>Crop Name:</b></p>
     		<br>
     		<input type="text" name="cropname" id="cropname" placeholder="Enter the crop name.. " required>
     		<br>
     		<p><b>Crop Image: </b></p>
     			<input type="file" name="myfile" id="myfile">
     			<br><br>
     		<p><b>Quantity Required:</b></p>
     		<input type="number" id="quant" name="quant" placeholder="Enter Quantity in Kg" required>
     		<br><br>
     		<input type="submit" value="Post" id="submit" name="submit">

     	</form>
     </div>
     </div>
	</div>
	</div>

</body>
</html>








