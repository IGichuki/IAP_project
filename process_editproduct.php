<?php
require('connect.php');

if (isset($_POST)) {
    $id = $_POST['id'];
    $productName = $_POST["productName"];
      $Description= $_POST["Description"];               
       $productImage= $_POST['productImage'];
  $unitPrice = $_POST["unitPrice"];
   $availableQuantity= $_POST["availableQuantity"];
   $createdAt= $_POST["createdAt"];
     $updatedAt= $_POST["updatedAt"];
   $addedBy= $_POST["addedBy"];
    $update_data = "UPDATE products SET productName='$productName' ,Description='$Description',productImage='$productImage',unitPrice='$unitPrice',availableQuantity='$availableQuantity',createdAt='$createdAt',updatedAt='$updatedAt',addedBy='$addedBy' WHERE productID ='$id'";

    if (mysqli_query($conn, $update_data)) {
        echo "Record updated successfully" . "<br/>";
        // header("location:viewuser.php");
    } else {

        echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
        // header("location:view users.php");
    }
}
?>