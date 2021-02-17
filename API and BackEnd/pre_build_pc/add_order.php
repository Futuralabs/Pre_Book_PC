<?php
include 'db2.php';
$su_id=$_GET['s_id'];
$lu_id=$_GET['l_id'];

$result=mysqli_query($con,"UPDATE `order_db` SET `status`='$lu_id' where order_id='$su_id'");
header('location: view_requests.php');
?>
