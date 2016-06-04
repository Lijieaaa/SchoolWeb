<?php
header("Content-type:text/html;charset=utf-8");
include('../../connect.php');
$name=stripslashes(trim($_POST['myname']));
$sex=$_POST['sex'];/*1.男2.女*/
$education=stripslashes(trim($_POST['education']));
$marry=stripslashes(trim($_POST['marry']));/*1未婚 0已婚*/
$workTime=stripslashes(trim($_POST['job_time']));
$abroadExpDummy=stripslashes(trim($_POST['abroad']));/*1有 2无*/
echo $name;
//echo $sex;
//echo $education;
//echo $marry;
//echo $workTime;
echo $abroadExpDummy;
?>
