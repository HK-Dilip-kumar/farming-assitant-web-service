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
}.login-box{
    width: 260px;
    height: 320px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 40%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 30px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
</style>
</head>
<body>
  <?php 
  session_start();
  ?>
	<ul>
		  <li><a href="index.php">HOME</a></li>
		  <li><a href="farmer_login.php">FARMER's LOGIN</a></li>
		  <li><a class="active">ADMIN LOGIN</a></li>
		  <li><a href="supplier_login.php">SUPPLIER LOGIN</a></li>
		  <li style="padding-left: 45%;"><a style="color: yellow;" href="#">WANT  TO  COLLABORATE...?</a></li>
	</ul>
	 <div class="login-box">
	 	<img src="image/avatar.png" class="avatar">
			<form action="validate_admin.php" method="post">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username" required="required">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter your Password" required="required"><br>
				<input type="submit" name="submit" value="Login">
			</form>
	</div>
	<img style="margin-top: 500px" src="image/footer_image.PNG" width="100%" height="300px">
</body>
</html>	