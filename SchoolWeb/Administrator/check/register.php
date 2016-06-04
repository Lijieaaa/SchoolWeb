<?php
include('../../connect.php');
header("Content-Type: text/html; charset=utf-8");
$username=$_POST['username'];
$password=md5($_POST['password']);
$password2=md5($_POST['password2']);
//$password=md5($_POST['password']);
$a=mysqli_fetch_array(mysqli_query($connect,"select * from admin where username='$username'"));
$uname=$a['username'];
$pass=$a['password' ];
if($a)
{
	echo"<script>alert('The username exist!');window.history.go(-1);</script>";
	exit;
}
	$sql="insert into admin(username,password) values('$username','$password')";
	$query=mysqli_query($connect,$sql);
	if($query)
	{
		echo"<script>alert('Registration Successful!');window.history.go(-1);</script>";
	    exit;
	}

 