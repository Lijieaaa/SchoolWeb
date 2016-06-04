<?php
include('../../../connect.php');
$username=$_GET['username'];
//echo $uid;
$sql="delete from user where username='$username'";
$sql2="delete from user_information where username='$username'";
mysqli_query($connect,$sql);
mysqli_query($connect,$sql2);
mysqli_close($connect);
header("Location:../dis_user.php");

?>