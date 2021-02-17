<?php

include "db2.php";

@$typeId=$_POST['typeid'];
@$Roleid=$_POST['roleid'];
@$ProductId=$_POST['prodid'];

$query=mysqli_query($con,"SELECT * FROM product_detail WHERE product_id='$ProductId'");
$real=mysqli_fetch_assoc($query);
@$title=$real['product_name'];
@$title2=$real['product_price'];

if ($typeId==1) {
	$result = mysqli_query($con,"UPDATE `cart_db` SET `company`='$title' WHERE user_id='$Roleid'");
}elseif ($typeId==2) {
	$result = mysqli_query($con,"UPDATE `cart_db` SET `Ram`='$title' WHERE user_id='$Roleid'");
}elseif ($typeId==3) {
	$result = mysqli_query($con,"UPDATE `cart_db` SET `memory`='$title' WHERE user_id='$Roleid'");
}elseif ($typeId==4) {
	$result = mysqli_query($con,"UPDATE `cart_db` SET `processor`='$title' WHERE user_id='$Roleid'");
}elseif ($typeId==5) {
	$result = mysqli_query($con,"UPDATE `cart_db` SET `cd_writer`='$title' WHERE user_id='$Roleid'");
}

$result2 = mysqli_query($con,"UPDATE `cart_db` SET `price`=price+'$title2' WHERE user_id='$Roleid'");

if($result2){
	echo "done";
}
else{
	echo "error";
}

?>	