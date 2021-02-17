<?php

include "db2.php";

@$name=$_POST['names'];
@$pass=$_POST['password'];
 @$email = $_POST['mailid'];
 @$mobile = $_POST['phonen'];
 @$roleId = $_POST['RoleID'];
 @$Address = $_POST['address'];



$result1 =mysqli_query($con, "UPDATE `registration_db` SET `name`='$name',`mobile`='$mobile' `address`='$Address' WHERE `role_id`='$roleId'");
$result2 =mysqli_query($con, "UPDATE `role_db` SET `mail`='$email',`password`='$pass' WHERE `role_id`='$roleId'");

if($result2){
	echo "done";
}
else{
	echo "error";
}

?>	