<?php
session_start();
error_reporting(0);
include_once("../connect.php");
header('Content-Type:text/html;charset=gbk');
$password = md5(trim($_POST['passwd']));
$username = stripslashes(trim($_POST['username']));
$row = "select id from `user` where `username`='$username'";
$query = mysqli_query($connect,$row);
$num = mysqli_num_rows($query);//判断数据库中是否存在该值
if($num==1)
{
$sql =("update `user` set `password`='$password' where username='$username '");
$query = mysqli_query($connect,$sql);
if (!$query) {
    echo 'error';
    exit;
} else {
	if($_SESSION['username']!=null)
	{
		echo'<script>alert("修改密码成功");window.location.href="http://127.0.0.1/school_work/Ume.php"</script>';
	}
	if($_SESSION['adminname']!=null){
		echo'<script>alert("修改密码成功");window.location.href="http://localhost/school_work/Administrator/home/personal.html"</script>';
	}
	if($_SESSION['username']!=null & $_SESSION['adminname']!=null )
	{
		echo'<script>alert("修改密码成功");window.location.href="http://localhost/school_work/main/login/login.html"</script>';
	}
    //echo '修改密码成功，返回<a href="http://127.0.0.1/school_work/Ume.php">首页</a>';
}
}
else{
echo"用户名不存在";
}
?>