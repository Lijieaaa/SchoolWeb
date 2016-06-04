<?php
include('../../../connect.php');
$checkid=$_GET['checkid'];
$id=$_GET['id'];
//echo $id;
//echo $checkid;
$sql="update job set checkid='$checkid' where id='$id'";
$query=mysqli_query($connect,$sql);
if($query)
{
	header('location:../dis_job_information.php');
}else{
	echo"Error";
}
?>