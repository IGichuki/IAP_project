<?php

require("connect.php");
print_r($_POST);
$subcategoryName=$_POST["subcategoryName"];


$sql="INSERT INTO `subcategory`(`subcategoryName`) VALUES('$subcategoryName')";

if(mysqli_query($conn,$sql)){
     echo "New record inserted successfuly";
}
else{ echo "Error: Record not added ".mysqli_error($conn);
}
//mysql1_close($conn);



?>