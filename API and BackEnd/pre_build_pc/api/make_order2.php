<?php

include "db2.php";

@$RoleId=$_POST['roleid'];
@$Custom = $_POST['custom'];

$query = mysqli_query($con,"SELECT * FROM cart_db where user_id='$RoleId'");
$real=mysqli_fetch_assoc($query);
@$title=$real['device'];
@$title2=$real['company'];
@$title3=$real['Ram'];
@$title4=$real['memory'];
@$title5=$real['processor'];
@$title6=$real['cd_writer'];
@$title7=$real['price'];

$query2 = mysqli_query($con,"INSERT INTO `order_db`(`user_id`, `device`, `company`, `ram`, `memory`, `processor`, `cd_drive`, `custom`, `price`, `status`) VALUES ('$RoleId','$title','$title2','$title3','$title4','$title5','$title6','$Custom','$title7','placed')");

$query3 = mysqli_query($con,"UPDATE `cart_db` SET `device`='',`company`='',`Ram`='',`memory`='',`processor`='',`cd_writer`='', `price`='' WHERE user_id='$RoleId'");

if($query2){
	echo "done";
}
else{
	echo "error";
}

?>	