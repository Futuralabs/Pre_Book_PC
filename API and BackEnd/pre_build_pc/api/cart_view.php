<?php 

include 'db2.php';

$query=mysqli_query($con,"SELECT * FROM cart_db where status=1");
$result= array();

while ($rowData= $query->fetch_assoc()) {
	$result[]= $rowData;
}

echo json_encode($result);

?>