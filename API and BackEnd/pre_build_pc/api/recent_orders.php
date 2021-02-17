<?php 

include 'db2.php';

@$RoleId=$_POST['roleid'];

$query=mysqli_query($con,"SELECT * FROM order_db where user_id='$RoleId' order by order_id desc");
$result= array();

while ($rowData= $query->fetch_assoc()) {
	$result[]= $rowData;
}

echo json_encode($result);

?>