<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="opacity: 0.0;" name="divv" >Hello World</div>
<input type="text" name="divv" value="hello">
<input type="submit" name="btn_add">
<?php
 if(isset($_POST['btn_add']))
 {
$su_id=$_GET['divv'];
echo $su_id." Welcome";
}
?>
</body>
</html>