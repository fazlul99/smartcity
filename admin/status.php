<?php 
include('includes/database.php');
$id=$_GET['id'];
$status=$_GET['status'];

$qul= "UPDATE tblbdonor SET status =$status WHERE id=$id";
mysqli_query($connect,$qul);
header('location:donor-list.php');

?>