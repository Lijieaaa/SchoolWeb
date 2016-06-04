<?php
include('../../../connect.php');
$id=$_GET['id'];
//echo $uid;
$sql="delete from job where id='$id'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header("Location:../dis_job_information.php");

?>