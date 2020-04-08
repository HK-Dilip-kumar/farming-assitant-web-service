<!DOCTYPE html>
<html>
<head>
	<title>FARMSEASY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
	</style>
<style>
	*{
		margin: 0px;
		padding: 0px;
	}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color: #111;
}
.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
	<ul>
		  <li><a  href="#home">Home</a></li>
		  <li><a href="farmer_login.php">FARMER LOGIN</a></li>
		  <li><a href="admin_login.php">ADMIN LOGIN</a></li>
		  <li><a href="supplier_login.php">SUPPLIER LOGIN</a></li>
		  <li><a href="contact.php">CONTACT US</a></li>
		  <li><a class="active" href="about.php">ABOUT US</a></li>
		  <!-- <li style="padding-left: 48%;"><a style="color: yellow;" href="#">WANT  TO  COLLABORATE...?</a></li> -->
	</ul>
	
<div class="about-section">
  <h1>About Us </h1><BR>
  <!-- <p>Some text about who we are and what we do.</p> -->
  <p>Farming assistant web service is a web project to help the farmers working with the motive of greater profitability by direct communication between; farmer-to- supplier and </P><br><P>farmer-to-farmer. This service boosts business communication and brings transparency in the system</p>
</div><br>

<h2 style="text-align:center; " >Our Team</h2><br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image\ss.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Shivanshi</h2>
        <p class="title">CEO & Founder</p>
        <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
        <p>shivanshi10@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image\d.jpeg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Dilip Kumar</h2>
        <p class="title"> Director</p>
        <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
        <p>dilip@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="image\shu.jpeg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Shubham Mishra</h2>
        <p class="title">manager</p>
        <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
        <p>shubham20@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column" style="margin-left: 33%">
    <div class="card">
      <img src="image\r.jpeg" alt="John" style="width:100%">
      <div class="container">
        <h2>Rajat Agrahari</h2>
        <p class="title">Product manager</p>
        <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
        <p>rajatagrahari10@gmail.com.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
	<img style="margin-top: 40px;" src="image/footer_image.PNG" width="100%" height="300px">
	
</body>
</html>