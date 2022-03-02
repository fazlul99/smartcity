<?php
include('includes/database.php');
$id=$_GET['pid'];

$sql= "DELETE FROM  tblbdonor WHERE id = '$id' ";

$query=mysqli_query($connect,$sql);
if ($query){
	header('location:donor-list.php');
}
else{
	echo 'can not delete';
}

?>