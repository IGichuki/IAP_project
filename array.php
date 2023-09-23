<?php
$myarray = array(
array("ankit","ram","shyman"),
array("unnao","tricky","kanpur"));

echo"<pre>";
print_r($myarray);
echo"</pre>";
?>

<?php

$data =[
'game of thrones'=>['jaime lannister','catelyn stark','cersei lannister'],
'black mirror '=>['namenette ','selma telse','karin']
];
echo"<h1>famous tv series and actors";
foreach ($data as $series => $actors) {
	echo"<h2>$series</h2>";
	foreach($actors as $actor){
		echo"<div> $actor</div>";
	}
}
/*echo"<pre>";
print_r($data);
echo"</pre>";*/

?>



