<?php

require("connect.php");
print_r($_POST);
$Firstname=$_POST["firstname"];
$Secondname=$_POST["secondname"];
$email=$_POST["email"];	
$psw=$_POST["psw"];
$pswrepeat =$_POST["pswrepeat"];
$phoneNumber=$_POST["phoneNumber"];


/*print_r($firstname);
print_r($secondname);	
print_r($email);
print_r($password);
print_r($passwordrepeat);*/

$sql="INSERT INTO `userinfo`(`firstname`,`secondname`,`email`,`psw`,`pswrepeat`,`phoneNumber`) VALUES('$Firstname','$Secondname','$email','$psw','$pswrepeat','$phoneNumber')";

if(mysqli_query($conn,$sql)){
	echo "New record inserted successfuly";
}
else{ echo "Error: Record not added ".mysqli_error($conn);
}
//mysql1_close($conn);




?>
