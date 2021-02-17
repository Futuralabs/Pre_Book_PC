<?php

include "db2.php";

@$name=$_POST['device'];
@$Roleid=$_POST['roleid'];
@$Acode=$_POST['code'];

if ($Acode=="A1") {
	$result = mysqli_query($con,"UPDATE `cart_db` SET `device`='$name' WHERE user_id='$Roleid'");
}

if($result){
	echo "done";
}
else{
	echo "error";
}

?>	