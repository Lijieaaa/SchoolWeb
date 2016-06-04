<?php
session_start();
//$sessionId = session_id();
include_once("../connect.php");
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('Asia/Shanghai');//设置时区为东八区
 $username = stripslashes(trim($_POST['username']));
 $passwd=md5(trim($_POST['passwd']));
 $sql="select * from user where username='$username'";
 $query=mysqli_query($connect,$sql);
 $query_2=mysqli_fetch_array($query);
 $name=$query_2['username'];//从数据库中取到激活码的值
 $pass=$query_2['password'];//从数据库中取到用户名
 $status=$query_2['status'];//从数据库中取到用户密码
 //echo $status;
 if(!$query_2)
 {
	echo '<script>alert("用户不存在!");window.history.go(-1);</script>';//判断用户是否存在
	exit;
 }
 if($status != 1)
 {
	echo '<script>alert("用户未激活，请登录邮箱激活！");window.history.go(-1);</script>';//判断用户是否激活
	exit;
 }

 if($query_2 & $pass==$passwd & $status==1)//判断密码是否正确
 {
	 //echo"欢迎你:".$_SESSION['username'];
	 //echo '点击此处 <a href="login.html?action=logout">注销</a> ';
	// echo'<script>window.location.href="http://127.0.0.1/school_work/Ume.php";</script>';
	 $_SESSION['username']=$username;
	 //header('location:../../Ume.php?sid='.$sessionId);
	echo'<script>window.location.href="http://127.0.0.1/school_work/Ume.php";</script>';
	 
	
 }else
 {
	 echo'<script>alert("用户名或密码错误");window.history.go(-1);</script>';
	
 }
 

?>