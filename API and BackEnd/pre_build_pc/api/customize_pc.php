<?php 

include 'db2.php';


  $query=mysqli_query($con,"SELECT * FROM `registration_db`");
  $result= array();

  while ($rowData= $query->fetch_assoc()) {
	$result[]= $rowData;
  }

  echo json_encode($result);


?>