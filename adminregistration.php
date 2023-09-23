<!DOCTYPE html>
<html>
<head>
<title> REGISTRATION</title>
<link rel="stylesheet" href="style.css">
</head>
<body id="body">
  <div class="header">
    <img src="logo.png" width="250px" height="100px">
  </div>
  <form action="process_adminRegister.php"method="post"> 
      <div id="login">
    <h1>Register</h1>
    <p>Please fill in this form below.</p>
    
    <input type="text" placeholder="Enter Firstname" name="firstname" id="Firstname" required>
   

    <p>
    <input type="text" placeholder="Enter Email" name="email" id="email" required></p>

    <p>
    <input type="password" placeholder=" password input" name="psw" id="psw" required></p>

     <label for="male"> male</label>
        <input type="radio" id="gmale" name="gender"value="male">  
          <label for="female"> female</label>
    <input type="radio" id="female" name="gender"value="female"><br>
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button onclick="window.location.href='login.php'">return</button>
  
   <button type="submit" id="registerbtn">Register</button>
  

  <div id="ClassSignIN">
    <p>Already have an account? <a href=" login.php">log in</a>.</p>
  </div>
</div>

</form>

  


</body>



