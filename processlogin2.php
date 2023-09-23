<?php
session_start();

require("connect.php");

 
if (isset($_POST['email']) && isset($_POST['psw'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['email']);
    $pass = validate($_POST['psw']);

    if (empty($uname)) {
        header("Location: login2.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: login2.php?error=password is required");
        exit();
    }else{
        $sql = "SELECT * FROM userinfo WHERE email='$uname' AND psw='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['psw'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['userID'] = $row['userID'];
                header("Location: userdashboard.php");
                exit();
            }else{
                header("Location: login2.php?error=Incorrect User name or password");
                exit();
            }
        }else{
            header("Location: login2.php?error=Incorrect User name or password");
            
            exit();
        }
    }
    
}else{
    header("Location: login2.php");
    exit();
}
if (isset($_POST['submit'])) {

    
    # code...
}
?>