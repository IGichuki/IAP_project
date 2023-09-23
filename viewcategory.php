<?php
	require("connect.php");
	$sql ="SELECT categoryName FROM category";
	$result = mysqli_query($conn,$sql);
?>
<?php
	require("connect.php");
	$sql ="SELECT subcategoryName FROM subcategory";
	$result = mysqli_query($conn,$sql);
?>
