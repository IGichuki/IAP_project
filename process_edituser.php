<?php
require('connect.php');

if (isset($_POST)) {
    $id = $_POST['id'];
   $firstname = $_POST["firstname"];
 $secondname= $_POST["secondname"];
 $email = $_POST["email"];
 $psw= $_POST["psw"];
 $pswrepeat= $_POST["pswrepeat"];
 $phoneNumber= $_POST["phoneNumber"];
    $update_data = "UPDATE userinfo SET firstname='$firstname' ,secondname='$secondname',email='$email',psw='$psw',pswrepeat='$pswrepeat',phoneNumber='$phoneNumber' WHERE userID ='$id'";

    if (mysqli_query($conn, $update_data)) {
        echo "Record updated successfully" . "<br/>";
        // header("location:viewuser.php");
    } else {

        echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
        // header("location:view users.php");
    }
}
?>