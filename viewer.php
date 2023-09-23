<?php
  

$servername="localhost";
$username="root";
$password="";
$dbname="clothes";
/*$conn=mysql_connect($servername, $username, $password, $dbname);*/

$conn=new mysqli($servername, $username, $password, $dbname);

/*mysql_connect("localhost","root"," ");*/

if(!$conn){
	die("could not connect".mysqli_connect_error());

}
	echo("connected successfully");




$sql="SELECT productID,productName,Description,productImage,unitPrice,availableQuantity,createdAt,updatedAt,addedBy FROM products";
$result = mysqli_query($conn,$sql);
print_r($result);
$row =mysqli_fetch_assoc($result);
echo "<br>";
echo "id; " .$row["productID"];
?>
