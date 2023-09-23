<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
    </head>
    <body>

    <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

  <!----------------------Login page ---------------------->
  <section class="header2" >
     <div class="header">
    <img src="logo.png" width="250px" height="100px">
  </div> 

     <form action="processlogin2.php" method="post">

     <div id="login">
        <h2> LOGIN</h2>
     

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

  <div>
     	<label for="Email">email</label>
     	<input id="email" type="email" name="email" placeholder="Enter email" required><br>
  </div>

  <div>
      <label for="Password">password</label>
     	<input id="psw" type="password" name="psw" placeholder="Password"><br>

  </div>

        <button type="submit" id="registerbtn">login</button>
        <button onclick="window.location.href='homepage.php'">return</button>
        <br>

        <div class="reg">
            <a href="">Forgotten password?</a> <a  href="registration.php">Register now</a> </div>

        </div>

     </form>
 </section>

</body>
</html>