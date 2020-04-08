<?php

// require_once('config.php');

// function for email validation
function is_valid_email($mail)
{
     if (empty($mail)) {
         echo "Email is required.";
         return false;
     } else {
         $email = test_input($mail);
         // check if e-mail address is well-formed
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           echo "Invalid email format."; 
           return false;
     } 
     // now check if the mail is already registered
     $slquery = "SELECT 1 FROM register WHERE email = '$email'";
     $selectresult = mysql_query($slquery);
     if(mysql_num_rows($selectresult)>0) {
       echo 'This email already exists.';
       return false;
     }
     // now returns the true- means you can proceed with this mail
     return true;
}

// function for password verification
function is_valid_passwords($pass,$confirmpass) 
{
     // Your validation code.
     if (empty($pass)) {
         echo "Password is required.";
         return false;
     } 
     else if ($pass != $confirmpass) {
         // error matching passwords
         echo 'Your passwords do not match. Please type carefully.';
         return false;
     }
     // passwords match
     return true;
}

// function for creating user
function create_user($username, $password, $cpassword, $email) 
{
      $query = "INSERT INTO `register` (username, password, confirmpassword, email) VALUES ('$username', '$password', '$cpassword', '$email')";
      $result = mysql_query($query);
      if($result){
          return true; // Success
      }else{
          return false; // Error somewhere
      }
}

// Code execution starts here when submit
if (isset($_POST['username']) && isset($_POST['password'])){

    // Reading form values
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if (is_valid_email($email) && is_valid_passwords($password,$cpassword))
    {
        if (create_user($username, $password, $cpassword, $email)) {
              echo 'New User Registered Successfully.';
        }else{
          echo 'Error Registering User!';
        }
    }
    // You don't need to write another 'else' since this is the end of PHP code 
?>

<!-- Here you go with the HTML -->

<!DOCTYPE html>
    <html>
    <head>
        <title>Login screen</title>
        <style type="text/css">
        .register-form{
            width: 500px;
            margin: 0 auto;
            text-align: center;
            padding: 10px;
            padding: 10px;
            background : #c4c4c4;
            border-radius: 10px;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
        }
        .register-form form input{padding: 5px;}
        .register-form .btn{
            background: #726E6E;
            padding: 7px;
            border-radius: 5px;
            text-decoration: none;
            width: 50px;
            display: inline-block;
            color: #FFF;
        }
        .register-form .register{
            border: 0;
            width: 60px;
            padding: 8px;
        }
        </style>
    </head>
    <body>
        <div class="register-form">
            <h1>Register</h1>
            <form action="" method="POST">
                <p><label>User Name: </label>
                <input type="text" id="username" name="username" placeholder="Username">
                </p>
                <p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
                <input id="email" name="email" type="email">
                </p>
                <p><label>Password&nbsp;&nbsp; :</label>
                <input id="password" name="password" type="password">
                </p>
                <p><label>confirm Password &nbsp;&nbsp; :</label>
                <input id="confirmpassword" name="confirmpassword" type="password">
                </p>
                <input type="submit" name="submit" value="register" class="btn register">
                <a class="btn" href="login.php">Login</a>
            </form>
        </div>
    </body></html>
