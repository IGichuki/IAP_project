<!DOCTYPE html>
<html>
<head>
<title>	login</title>
<link rel="stylesheet" href="style.css">
</head>
<body >
  <div id="body">
  <div class="header">
    <img src="logo.png" width="250px" height="100px">
  </div>  
	<form>
		
  <div id="login">
     <form action="processlogin.php" method="POST">
    <h1>LOGIN</h1>

    <p>kindly enter your details: </p>
    <p><label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required></p>

    <p><label for="psw"><b>Password</b></label>
    <input type="password" placeholder=" password input" name="psw" id="psw" required></p>
    <div class="pass">
      <p><a href="#">forgot password?</a></p>
    </div>


    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> 
    <button onclick="window.location.href='homepage.php'">return</button>
    <button onclick="window.location.href='dashboard.php'">submit</button>
   
    <p>create new account? <a href="registration.php">register</a>.</p>

  </div>

</form>

</div>

</body>





