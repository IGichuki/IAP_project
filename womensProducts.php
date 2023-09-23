<?php include('connect.php'); ?>

<?php

if(isset($_POST['addcart'])){

    $productName = $_POST['productName'];
    $unitPrice = $_POST['unitPrice'];
    $productImage = $_POST['productImage'];
    $availableQuantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cartitem` WHERE productName= '$productName'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart';
    }else{
       $insert_product = mysqli_query($conn, "INSERT INTO `cartitem`(productName,unitPrice, productImage, availableQuantity) VALUES('$productName', '$unitPrice', '$productImage', '$availableQuantity')");
       $message[] = 'product added to cart succesfully';
    }
 
 }



?>


<html>
<head>
    <meta charset="utf-8">
    <title>Women</title>
    <link rel="stylesheet" href="style.css">
    
   </head>
   
<body class="body">
    <div>
        <h1 class="title">WOMEN</h1>

&nbsp; &nbsp;<a href="addcart.php" class="btn-primary">Cart  </a> &nbsp; &nbsp;
  <a href="homepage.php" class="btn-primary">Home  </a>

  <br><br></div>


  
 <div class="main-content">
     
     <div class="wrapper">
     

     <br><br>


     <br><br>
     <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
<?php include 'header.php'; ?>
    

     <!----------------------view products/clothes table----------------->
     
        <?php
        
        $sql = "SELECT *FROM products WHERE categoryName='women'" ;
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($fetch_product = mysqli_fetch_assoc($res)){
                ?>
          
                <form action="" method="post">
                   <div class="box">
                      <img src="<?php echo $fetch_product['productImage']; ?>" alt="" width="200px">
                      <h3><?php echo $fetch_product['productName']; ?></h3>
                      <div class="price">ksh.<?php echo $fetch_product['unitPrice']; ?></div>
                      <input type="hidden" name="productName" value="<?php echo $fetch_product['productName']; ?>">
                      <input type="hidden" name="unitPrice" value="<?php echo $fetch_product['unitPrice']; ?>">
                      <input type="hidden" name="productImage" value="<?php echo $fetch_product['productImage']; ?>">
                      <input type="submit" class="btn" value="addcart" name="addcart">
                   </div>
                </form>
          
            
                 
               <?php
            }
        }
        else
        {
           // echo"<tr> <td colspan="6" class=" "> not added yet</td> </tr>";
        }
        
        ?>

    


     </div>
     
 </div>

 </body>
</html>