<?php
session_start();
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include('../../connect.php');
if(!empty($_POST['username'])){
$username=stripslashes(trim($_POST['username']));}
$name=stripslashes(trim($_POST['myname']));
$sex=$_POST['sex'];/*1.男2.女*/
$birthday=stripslashes(trim($_POST['birth']));
$height=stripslashes(trim($_POST['height']));
$education=stripslashes(trim($_POST['edu']));
$marry=stripslashes(trim($_POST['marry']));/*1未婚 0已婚*/
$city=stripslashes(trim($_POST['nowLive']));
$hukou=stripslashes(trim($_POST['rpr']));
//$workTime=stripslashes(trim($_POST['workTime']));
$age=stripslashes(trim($_POST['age']));
$abroadExpDummy=stripslashes(trim($_POST['abroad']));/*1有 2无*/
$mobile=stripslashes(trim($_POST['mobile']));
$email=stripslashes(trim($_POST['email']));
$description=stripslashes(trim($_POST['description']));
if($_SESSION['username']==null){
$sql="insert into user_information(username,name,sex,birthday,height,education,marry,city,hukou,abroad,phone,email,description,age)
 values('$username','$name','$sex','$birthday','$height','$education','$marry','$city','$hukou','$abroadExpDummy','$mobile','$email','$description','$age');";
}else{
	$sql="update user_information set name='$name',sex='$sex',birthday='$birthday',height='$height',education='$education',marry='$marry',city='$city',hukou='$hukou',age='$age',abroad='$abroadExpDummy',phone='$mobile',email='$email',
	description='$description' where email='$email'";
}
$query=mysqli_query($connect,$sql);
if($query)
{
	if($_SESSION['username']==null){
	echo"<script>alert('save successful');</script>";
	echo'<script>window.location.href="http://localhost/school_work/main/login/login.html";</script>';
	exit;
	}
	else{
		echo"<script>alert('save successful');</script>";
		echo'<script>window.location.href="http://localhost/school_work/Ume.php";</script>';
	    exit;
	}
	//echo'<script>window.location.href="http://127.0.0.1/school_work/Administrator/home/personal.html";</script>';
	
	
}
?>