<?php include('../coureseproject/connect.php'); ?>

<?php


if(isset($_POST['update'])){
 
    

  $ID =$_POST['productID'];
 
   $availableQuantity = $_POST['availableQuantity'];

   $update_quantity_query = mysqli_query($conn, "UPDATE `cartitem` SET availableQuantity = '$availableQuantity' WHERE ID = '$ID'");
   if($update_quantity_query){
      header('location:addcart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cartitem` WHERE ID= '$remove_id'");
   header('location:addcart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cartitem`");
   header('location:addcart.php');
}

?>
<?php

if(isset($_POST['add_to_cart'])){

    $productName = $_POST['productName'];
    $unitPrice = $_POST['unitPrice'];
    $productImage = $_POST['productImage'];
    $availableQuantity = $_POST['availableQuantity'];
    $sub_total=$availableQuantity*$unitPrice;
    $total = $total + $sub_total;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cartitem` WHERE ProductName= '$ProductName'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart';
    }else{
       $insert_product = mysqli_query($conn, "INSERT INTO `cartitem`(ProductName, availablePrice, productImage, availableQuantity) VALUES('$ProductName', '$unitPrice', '$productImage', '$availableQuantity')");
       $message[] = 'product added to cart succesfully';
    }
 
 }



?>

<html>


    <head>
        <meta charset="utf-8">
   <title>clothing website</title>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    </head>

    <body class="cart-body">

 <div class="main-contents">
     
     <div class="wrappers">
     <h2>SHOPPING CART</h2> <br><br>
     </div>

     <br><br>

     

     <!----------------------view shopping cart details----------------->
     <div class="container">

<section class="shopping-cart">

   <table>

      <thead>
           <th>S.N</th>
           <th>Image</th>
            <th>ProductName</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cartitem`");
         $grand_total = 0;
         $sn = 1;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
             <td> <?php echo $sn++; ?> </td>
            <td><img src="/webapplication/coureseproject/<?php echo $fetch_cart['productImage']; ?>" width="100" alt=""></td>

            <td><?php echo $fetch_cart['productName']; ?></td>

            <td>$<?php echo number_format($fetch_cart['unitPrice']); ?>/-</td>

            <td>
              <form action="addcart.php" method="post">
                  <input type="hidden" name="productID"  value="<?php echo $fetch_cart['ID']; ?>" >   
                  <input type="number" name="availableQuantity" min="1"  value="<?php echo $fetch_cart['availableQuantity']; ?>" >
                  <input type="submit" value="update" name="update" class="btn-primary">
            </form>
            </td>

            <td>ksh.<?php echo $sub_total = number_format($fetch_cart['unitPrice'] * $fetch_cart['availableQuantity']); ?></td>
            <td><a href="addcart.php?remove=<?php echo $fetch_cart['ID']; ?>" onclick="return confirm('remove item from cart?')" class="btn-primary"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
          // $grand_total =$grand_total+ $sub_total;  
            };
         };
         ?>

         <tr class="table-bottom">
            <td><a href="women-category.php" class="btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>$<?php echo $sub_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="btn-primary"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>
         
      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
   </div>

</section>

</div>
   
    
    
    
     </div>
     
 </div>
    </body>
    </html>