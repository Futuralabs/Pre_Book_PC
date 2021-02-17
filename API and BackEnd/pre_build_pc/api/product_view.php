<?php 

include 'db2.php';

@$Roleid=$_POST['roleid'];
@$Acode=$_POST['prodid'];

$query=mysqli_query($con,"SELECT * FROM product_detail WHERE product_type='$Acode'");
$result= array();

while ($rowData= $query->fetch_assoc()) {
	$result[]= $rowData;
}

echo json_encode($result);

?>