<?php 
require("connect.php");
$ID=$_GET['id'];
$sql="SELECT * FROM userinfo WHERE userID ='$ID'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

 $firstname = $row["firstname"];
 $secondname= $row["secondname"];
 $email = $row["email"];
 $psw= $row["psw"];
 $pswrepeat= $row["pswrepeat"];
 $phoneNumber= $row["phoneNumber"];
?>
<!DOCTYPE html>
<html>
<head>
<title>	UPDATE USER DETAILS</title>
<link rel="stylesheet" href="style.css">
</head>
<body id="body">
  <div class="header">
    <img src="logo.png" width="250px" height="100px">
  </div>
  <form action="process_edituser.php"method="post"> 

<input value="<?php echo $ID; ?> "type='hidden' name='id'>
      <div id="login">
    <h1>Register</h1>

    <p>Please fill in this form below.</p>
    
    <input type="text" placeholder="Enter Firstname" name="firstname" id="Firstname"  value=" <?php echo $firstname;?>"required>
    <p>
    <input type="text" placeholder="Enter Secondname" name="secondname" id="Secondname" value=" <?php echo $secondname;?>" required></p>

    <p>
    <input type="text" placeholder="Enter Email" name="email" id="email"  value=" <?php echo $email;?>"required></p>

    <p>
    <input type="password" placeholder=" password input" name="psw" id="psw" value=" <?php echo $psw;?>" required></p>

    <p>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="psw-repeat"  value=" <?php echo $pswrepeat;?>" required>
    </p>
     <label for="male"> male</label>
        <input type="radio" id="gmale" name="gender"value="male">  
          <label for="female"> female</label>
    <input type="radio" id="female" name="gender"value="female"><br>
    
    <tr>
      <td>
        phone number;
      </td>
      <td>
        <select>
          <option>254</option>
          <option>221</option>
          <option>231</option>
          <option>271</option>
          <option>324</option>
        </select>
        <input type="phone number" placeholder=" 26627..."name="phoneNumber" value=" <?php echo $phoneNumber;?>">

      </td>
    </tr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button onclick="window.location.href='login.php'">return</button>
  
   <button type="submit" id="updatebtn">update</button>
  

  <div id="ClassSignIN">
    <p>Already have an account? <a href=" login.php">log in</a>.</p>
  </div>
</div>

</form>

  


</body>



