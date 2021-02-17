<?php
include 'db2.php';
$su_id=$_GET['s_id'];
mysqli_query($con,"DELETE FROM product_detail WHERE product_id='$su_id'");
        header('location: product_type.php');
?>