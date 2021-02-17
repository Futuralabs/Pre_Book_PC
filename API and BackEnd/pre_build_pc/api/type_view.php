<?php 

include 'db2.php';

$query=mysqli_query($con,"SELECT * FROM specs_category");
$result= array();

while ($rowData= $query->fetch_assoc()) {
	$result[]= $rowData;
}

echo json_encode($result);

?>