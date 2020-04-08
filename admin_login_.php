<html>
<head>
	<title>FARMSEASY</title>
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


body{
    margin: 0;
    padding: 0;
    background: url(image/image.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
nav{
  margin-top: 20px;
  margin-left: 430px;
  list-style-type: none;
   overflow: hidden;
  background-color: #333;
  margin-right: 440PX;
}
nav li a{
  padding-left: 50PX;
  color: white;
}
</style>
</head>
<body>
 <ul>
        		  <li><a href="index.php">HOME</a></li>
        		  <li><a href="farmer_login.php">FARMER's LOGIN</a></li>
              <li><a class="active">ADMIN LOGIN</a></li>
              <li><a href="supplier_login.php">SUPPLIER LOGIN</a></li>
        		  <li style="padding-left: 55%;"><a style="" href="index.php">LOG OUT</a></li>
        	</ul>
          <h1 align="center" style="margin-top: 50px;">WELCOME TO ADMIN PAGE</h1>
          <nav>
              <li><a href="complaints.php">VIEW COMPLAINTS</a></li>
              <li><a href="farming_tips.php">FARMING TIPS</a></li></LI>
              <li><a href="#">CONTACT FARMERS</a></li>
          </nav>
        	<img style="margin-top: 450px" src="image/footer_image.PNG" width="100%" height="300px">
        </body>
</html>