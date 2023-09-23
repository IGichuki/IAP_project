<?php
	require("connect.php");
	$sql ="SELECT * FROM userinfo";
	$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="viewuser.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<title> USERVIEW</title>
</head>
<body> 
	<section class="user">
		
		 <h1>user details</h1>
        
        <table>
            <tr>
                <th>firstname</th>
                <th>secondname</th>
                <th>psw</th>
                <th>phoneNumber</th>
                <th>email</th>
            </tr>
            
           <?php
		               $result = mysqli_query($conn,$sql);

                       if(mysqli_num_rows($result)>0){
	 
                         while($row = mysqli_fetch_assoc($result)){

                             $firstname = $row["firstname"];
                             $secondname= $row["secondname"];
                             $psw= $row["psw"];
                             $phoneNumber = $row["phoneNumber"];
                             $email = $row["email"];
                             ?>
                             <tr>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['secondname'] ?></td>
                    <td><?php echo $row['psw'] ?></td>
                    <td><?php echo $row['phoneNumber'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                        <button class="btn"><a href="edituser.php?id=<?php echo $row['userID']?>">EDIT</a></button>

                    </td>




                </tr>
                <?php
                            }
		
                          }
                        ?>

            
          
        </table>
         <button onclick="window.location.href='dashboard.php'">return</button>
    
      
    </section>
</body>
 
</html>
	
</body>