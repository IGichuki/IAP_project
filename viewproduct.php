<?php
	require("connect.php");
	$sql ="SELECT * FROM products";
	$result = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="viewuser.css">

<title> PRODUCTRVIEW</title>
</head>
<body> 
    <form action="" method="POST" enctype="multipart/form-data"> 
        <section>
        
         <h1>product details</h1>
        
        <table>
            <thead> 
                <tr>
                <th>productName</th>
                <th>Description</th>
                <th>productImage</th>
                <th>unitPrice</th>
                <th>availableQuantity</th>
                <th>createdAt</th>
                <th>updatedAt</th>
                <th>addedBy</th>
            </tr>
        </thead>
           
            
           <?php
                       $result = mysqli_query($conn,$sql);

                       if(mysqli_num_rows($result)>0){
     
                         while($row = mysqli_fetch_assoc($result)){;

                             $productName = $row["productName"];
                             $Description= $row["Description"];
                              $productImage= $row['productImage'];
                             $unitPrice = $row["unitPrice"];
                             $availableQuantity= $row["availableQuantity"];
                              $createdAt= $row["createdAt"];
                               $updatedAt= $row["updatedAt"];
                                $addedBy= $row["addedBy"];
                                ?>
                             <tr>
                    <td><?php echo $row['productName'] ?></td>
                    <td><?php echo $row['Description'] ?></td>
                   <td>
                     <?php
                      if($productImage=="")
                      {
                      // echo "<div class=""> image not added</div>";
                      }
                      else
                      {
                        ?>
                        
                        <img src="<?php echo $productImage; ?>"  width="150px" >

                        <?php
                      }
                      
                      ?> 
                      </td>
                    <td><?php echo $row['unitPrice'] ?></td>
                    <td><?php echo $row['availableQuantity'] ?></td>
                    <td><?php echo $row['createdAt'] ?></td>
                    <td><?php echo $row['updatedAt'] ?></td>
                    <td><?php echo $row['addedBy'] ?></td>
                    <td>
                        <button class="btn"><a href="editproduct.php?id=<?php echo $row['productID']?>">EDIT</a></button>

                    </td>




                </tr>
                <?php
                            }
        
                          }
                        ?>

 


            
          
        </table>
         
    
      
    </section>
    </form>
    <button onclick="window.location.href='dashboard.php'">return</button>

</body>
 
</html>
	
</body>
