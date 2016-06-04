<?php
session_start();
include('../../connect.php');
$companyname=stripslashes(trim($_POST['companyname']));/*公司名称*/
$jobtitle=stripslashes(trim($_POST['jobtitle']));/*职位*/
$jobcategory=stripslashes(trim($_POST['jobcategory']));/*职位类形1.互联网2经管.....*/
$internWorkDay=stripslashes(trim($_POST['internWorkDay']));/*工作时间/周*/
$interndeadline=stripslashes(trim($_POST['interndeadline']));/*工作时长*/
$monthBottomSalary=stripslashes(trim($_POST['monthBottomSalary']));/*最低工资*/
$monthTopSalary=stripslashes(trim($_POST['monthTopSalary']));/*最高工资*/
$xue=stripslashes(trim($_POST['education']));/*教育背景*/
$workCity=stripslashes(trim($_POST['workCity']));/*所在地*/
$cityAddress=stripslashes(trim($_POST['cityAddress']));/*详细地址*/
$job_family=stripslashes(trim($_POST['job_family']));/*职位类别实习或全职*/
$fuli=stripslashes(trim($_POST['fuli']));/*福利待遇*/
$company_situation =stripslashes(trim($_POST['company_situation']));/*公司概况*/
$youhuo=stripslashes(trim($_POST['description']));/*职位诱惑*/
$expiration_time=stripslashes(trim($_POST['expiration_time']));/*到期时间*/
$job_duties=stripslashes(trim($_POST['job_duties']));/*岗位职责*/
$job_entails=stripslashes(trim($_POST['job_entails']));/*岗位要求*/
$update_time=$time=time();/*发布时间*/
//echo $job_duties;
$sql="insert into job(company_name,job_name,job_family,job_time,interndeadline,update_time,money_buttom,money_Top,education,company_situation,family,city,cityAddress,fuli,youhuo,job_duties,job_entails,expiration_time)
 values('$companyname','$jobtitle','$job_family','$internWorkDay','$interndeadline','$update_time','$monthBottomSalary','$monthTopSalary','$xue','$company_situation ','$jobcategory',
 '$workCity','$cityAddress','$fuli','$youhuo','$job_duties','$job_entails','$expiration_time')";
 $query=mysqli_query($connect,$sql);
if($query)
{
	echo"<script>alert('发布成功');</script>";
	echo'<script>window.location.href="http://127.0.0.1/school_work/company.php";</script>';
}


?> 