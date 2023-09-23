<!DOCTYPE html>
<html>
<head>
<title>	CATEGORY</title>
<link rel="stylesheet" href="style.css">
</head>
<body >
	
<div class="content">
	<div class="wrapper">
		<h1>add category</h1>
		<br>
		<form action="" method="post">
			
			<table class="">
				<tr>
					<td>Title:</td>
					<td>
						<input type="text" name="categoryName" placeholder="category title">
					</td>

				</tr>
				<tr>
					<td>active</td>
					<td>
						<input type="radio" name="active" value="yes">yes
						<input type="radio" name="active" value="no">no
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="add category" class="submit">
					</td>
				</tr>
				

			</table>
		</form>
	
         <?php
    
//check if submit btn is clicked          
          if(isset($_POST['submit']))
          {
           echo"clicked";  
           $categoryName=$_POST['categoryName'];
//check if the radio input is selected
           if(isset($_POST['Active']))
           {
               $Active=$_POST['Active'];
           }
           else
           {
               $Active="No";
           }

//SQL to insert data
$sql="INSERT INTO `category` (`categoryName`,`Active`)
VALUES('$categoryName','$Active')";


if(mysqli_query($conn,$sql)){
    $_SESSION['add']="new record created succesfully" ;
    header('location:'.'manage-category.php');
}else{
    echo"Error: ".mysqli_error($conn);
    $_SESSION['add']="Error" ;
    header('location:'.'add-category.php');
}

          }
     ?>
	    
		
	</div>
</div>

</body>