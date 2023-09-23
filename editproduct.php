
<?php 
require("connect.php");
$ID=$_GET['id'];
$sql="SELECT * FROM products WHERE productID ='$ID'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

 $productName=$row["productName"];
$Description=$row["Description"]; 
$unitPrice=$row["unitPrice"];
$availableQuantity =$row["availableQuantity"];
$createdAt=$row["createdAt"];
$updatedAt=$row["updatedAt"];
$addedBy=$row["addedBy"];
// $productImage=$_POST['productImage']['name'];
// $product_img_tmp_name=$_POST['productImage']['tmp_name'];
// $product_img_folder="projectImages/".$productImage;
$categoryName=$row["categoryName"];

?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="text.css">

   <title>ADD PRODUCTS</title>
</head>
<body>
   <?php
   require('connect.php');
   $sql="SELECT *FROM category";
   $all_category=mysqli_query($conn,$sql);
   ?>
   <?php
   require('connect.php');
   $sub="SELECT *FROM subcategory";
   $all_subcategory=mysqli_query($conn,$sub);
   ?>

   <form action="process_editproduct.php" method="post" enctype="multipart/form-data">
      <input value="<?php echo $ID; ?> "type='hidden' name='id'>
      <fieldset>
         <div class="login">
            <label>Product Name</label>
            <input type="text" name="productName" value=" <?php echo $productName;?>">
         </div>
         <br>
         <div class="login">
            <label>Description</label>
            <input type="text" name="Description" value=" <?php echo $Description;?>">
         </div>
         <br>
         

         <div class="login">
            <label>product image</label>
            <input type="file" name="productImage" id="productImage" value=" <?php echo $productImage;?>">
         </div>

         
         <br>
         <div class="login">
            <label>unitPrice</label>
            <input type="number" name="unitPrice" value=" <?php echo $unitPrice;?>">
         </div>
         <br>
         <br>
         <div class="login">
            <label>availableQuantity</label>
            <input type="number" name="availableQuantity"value=" <?php echo $availableQuantity;?>">
         </div>
         <br>
         <div class="login">
            <label>createdAt</label>
            <input type="datetime-local" name="createdAt" value=" <?php echo $createdAt;?>">
         </div>
         <br>
         <div class="login">
            <label>updatedAt</label>
            <input type="datetime-local" name="updatedAt" value=" <?php echo $updatedAt;?>">
         </div>
         <br>
         <div class="login">
            <label>addedBy</label>
            <input type="text" name="addedBy" value=" <?php echo $addedBy;?>">
         </div>
         <br>

         <div class="login">
            <label>Add Category</label>
            <select name="categoryName" id="Category" value=" <?php echo $categoryName;?>">
            <?php
                 while ($category = mysqli_fetch_array($all_category, MYSQLI_ASSOC)) :; {}
                 ?>
                 <option value="<?php echo $category['categoryName'];?>">
                  <?php echo $category['categoryName'];?>
                 </option>
             <?php endwhile;?>
            </select>
         </div>
        
         
         <input type="submit" name="submitProduct" value="add product">
         
      </fieldset>
   </form>

</body>
</html>