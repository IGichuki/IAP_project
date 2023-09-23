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



?>