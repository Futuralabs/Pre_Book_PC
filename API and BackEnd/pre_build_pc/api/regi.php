<?php

include "db2.php";

@$name=$_POST['names'];
@$pass=$_POST['password'];
 @$email = $_POST['mailid'];
 @$mobile = $_POST['phonen'];

$query="INSERT INTO role_db (mail,password,role) values ('$email','$pass','customer')";
$result = mysqli_query($con,$query);
$roleid =mysqli_insert_id($con);
$result2 =mysqli_query($con, "INSERT INTO `registration_db`(`user_name`, `mobile`,`role_id`) VALUES ('$name','$mobile','$roleid')");
$result3 =mysqli_query($con, "INSERT INTO `cart_db`(`user_id`, `status`) VALUES ('$roleid',1)");

if($result2){
	echo "done";
}
else{
	echo "error";
}

?>	