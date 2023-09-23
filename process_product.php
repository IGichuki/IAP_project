
<?php

require("connect.php");
print_r($_POST);
print_r($_FILES);

$productName=$_POST["productName"];
$description=$_POST["description"]; 
$unitPrice=$_POST["unitPrice"];
$availableQuantity =$_POST["availableQuantity"];
$createdAt=$_POST["createdAt"];
$updatedAt=$_POST["updatedAt"];
$addedBy=$_POST["addedBy"];
$productImage=$_FILES['productImage']['name'];
$product_img_tmp_name=$_FILES['productImage']['tmp_name'];
$product_img_folder="projectImages/".$productImage;
$categoryName=$_POST["categoryName"];


/*if(isset($_FILES)){

   $image_dir='../coureseproject';
   $temp_file=$_FILES['productImage']['tmp_name'];
   $uploaded_name=$_FILES['productImage']['name'];
   $to_upload = $image_dir.$uploaded_name;
   move_uploaded_file($temp_file,$to_upload);
   echo $to_upload;
}*/

$sql="INSERT INTO `products`(`productName`,`description`,`unitPrice`,`availableQuantity`,`createdAt`,`updatedAt`,`addedBy`,`productImage`,`categoryName`) VALUES('$productName','$description','$unitPrice','$availableQuantity','$createdAt','$updatedAt','$addedBy','$product_img_folder','$categoryName')";

if(mysqli_query($conn,$sql)){
   echo "New record inserted successfuly";
}
else{ echo "Error: Record not added ".mysqli_error($conn);
}
//mysql1_close($conn);



?>

