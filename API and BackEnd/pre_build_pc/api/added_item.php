<?php 

include 'db2.php';

@$Acode=$_POST['prodid'];

$query=mysqli_query($con,"SELECT * FROM product_detail WHERE product_id='$Acode'");
$result= array();

while ($rowData= $query->fetch_assoc()) {
	$result[]= $rowData;
}

echo json_encode($result);

?>