<?php 

include 'db2.php';

@$id = $_POST['roleid'];

$query=mysqli_query($con,"SELECT * FROM cart_db WHERE user_id='$id'");
$result= array();

while ($rowData= $query->fetch_assoc()) {
	$result[]= $rowData;
}

echo json_encode($result);

?>