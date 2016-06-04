<?php
session_start();
header("Content-type: text/html; charset=utf-8");
include_once("../connect.php");
$compword = $_POST['compword'];
$compkey = $_POST['compkey'];
$logchecksql = "select * from company_info where compword='$compword' and compkey='$compkey';";
$logcheck = mysqli_query($connect,$logchecksql)or die('表不存在');
$lognum = mysqli_num_rows($logcheck);
if($lognum == 1){
	$checksql = "select * from company_info where compword='$compword';";
	$check = mysqli_query($connect,$checksql);
	$num = mysqli_fetch_assoc($check);
	//$_SESSION['company_check'] = $num['company_check'];
	$_SESSION['compword'] = $compword;
	$_SESSION['compkey'] = $compkey;
	header("location:../company.php");
	//if($_SESSION['company_check'] == null){echo 1;}
}
else{
	echo "<script>window.onload=function a(){alert('对不起,该用户不存在或用户名密码错误,请重新确认后登录。');history.back();}</script>";
}
?>