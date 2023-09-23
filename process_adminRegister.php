<?php

require("connect.php");
print_r($_POST);
$firstname=$_POST["firstname"];
$email=$_POST["email"];	
$psw=$_POST["psw"];
;


/*print_r($firstname);
print_r($secondname);	
print_r($email);
print_r($password);
print_r($passwordrepeat);*/

$sql="INSERT INTO `adminregistration`(`firstname`,`email`,`psw`) VALUES('$firstname','$email','$psw')";

if(mysqli_query($conn,$sql)){
	echo "New record inserted successfuly";
}
else{ echo "Error: Record not added ".mysqli_error($conn);
}
//mysql1_close($conn);



?>
