<?php
session_start();
include('../../connect.php');
$username=stripslashes(trim($_POST['username']));
$password=md5(trim($_POST['password']));
//$password=md5($_POST['password']);
$a=mysqli_fetch_array(mysqli_query($connect,"select * from admin where username='$username'"));
$uname=$a['username'];
$passwd=$a['password'];

if($username==null || $password==null)
{
	echo"<script>alert('User name or password can not be empty');window.history.go(-1);</script>";
	exit;
}
if(!$a)
{
	echo"<script>alert('User does not exists');window.history.go(-1);</script>";
	exit;
}

if($password != $passwd)
{
	echo"<script>alert(' Wrong Password');window.history.go(-1);</script>";
	exit;
}
if($a & $password==$passwd)
{
	$_SESSION['adminname']=$username;
	//echo $_SESSION['adminname'];
	 echo'<script>window.location.href="http://127.0.0.1/school_work/Administrator/home/control.html";</script>';
	 exit;
}

