<?php

require("connect.php");
print_r($_POST);
$categoryName=$_POST["categoryName"];


$sql="INSERT INTO `category`(`categoryName`) VALUES('$categoryName')";

if(mysqli_query($conn,$sql)){
     echo "New record inserted successfuly";
}
else{ echo "Error: Record not added ".mysqli_error($conn);
}
//mysql1_close($conn);



?>


?>
