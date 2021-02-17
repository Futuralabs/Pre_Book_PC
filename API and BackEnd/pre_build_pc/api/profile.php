<?php 

include 'db2.php';

  @$role = $_POST['roleid'];

  $query=mysqli_query($con,"SELECT * FROM `registration_db` inner join role_db ON role_db.role_id=registration_db.role_id WHERE role_db.role_id='$role'");
  $result= array();

  while ($rowData= $query->fetch_assoc()) {
	$result[]= $rowData;
  }

  echo json_encode($result);


?>