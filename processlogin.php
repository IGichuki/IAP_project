
<?php

require("connect.php");
if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST['submit'])) {

    $email = $row['email'];
    $Psw = $row['psw'];
    


    $sql = "select * from userinfo where email='" . $email . "'and psw='" . $psw . "' limit 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

          //  $_SESSION["Password"] = $row["Password"];

           $_SESSION['email'] = $row['email'];
            $_SESSION['psw'] = $row['psw'];
            header("location:userdashboard.php");
           
        } 
    } else {

        //header("location:login.php");
    }