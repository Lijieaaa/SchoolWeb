<?php
$host="localhost";
$db_user="root";//用户名
$db_pass="112305";//密码
$db_name="school_work";//数据库
$timezone="Asia/Shanghai";
//$link=mysql_connect($host,$db_user,$db_pass);
$connect = mysqli_connect($host,$db_user,$db_pass,$db_name) or die('Unale to connect');
if($connect)
//echo 1111;
mysqli_query($connect,"SET names UTF8");
header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间
?>
