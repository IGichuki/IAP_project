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

   <form action="process_product.php" method="post" enctype="multipart/form-data">
      <fieldset>
         <div class="login">
            <label>Product Name</label>
            <input type="text" name="productName">
         </div>
         <br>
         <div class="login">
            <label>Description</label>
            <input type="text" name="description">
         </div>
         <br>
         <div class="login">
            <label>product image</label>
            <input type="file" name="productImage" id="productImage">
         </div>
         <br>
         <div class="login">
            <label>unitPrice</label>
            <input type="number" name="unitPrice">
         </div>
         <br>
         <br>
         <div class="login">
            <label>availableQuantity</label>
            <input type="number" name="availableQuantity">
         </div>
         <br>
         <div class="login">
            <label>createdAt</label>
            <input type="datetime-local" name="createdAt">
         </div>
         <br>
         <div class="login">
            <label>updatedAt</label>
            <input type="datetime-local" name="updatedAt">
         </div>
         <br>
         <div class="login">
            <label>addedBy</label>
            <input type="text" name="addedBy">
         </div>
         <br>

         <div class="login">
            <label>Add Category</label>
            <select name="categoryName" id="Category">
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