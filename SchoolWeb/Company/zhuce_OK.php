<?php
session_start();
header("Content-type: text/html; charset=utf-8");
//error_reporting(0);
include_once("../connect.php");
$username = $_POST['username'];
$userword = $_POST['userword'];
$verifycode=strtolower($_POST['passwordconfirm']);//验证码
$regchecksql = "select * from company_info where compword = '$username'";
$regcheck = mysqli_query($connect,$regchecksql)or die("表不存在");
$regnum = mysqli_num_rows($regcheck);
if($verifycode!=strtolower($_SESSION['code']))
{
	echo '<script>alert("验证码错误");window.history.go(-1);</script>';
    exit;
}
if($regnum == 0){
	$regsql = "insert into company_info (compword,compkey) values ('$username','$userword');";
	mysqli_query($connect,$regsql);
	echo "恭喜您注册成功！3秒后跳转并完善公司信息。</br>";
	//echo "如不能即使跳转，请点击";
	//echo "<a href=../login.php'>登录</a>";
	header("Refresh:3;url=companyinfo.php");
}
else if($regnum >= 0){
print <<< REG
	    <script>
window.onload=function a(){
    alert('对不起,你的用户名已被注册,请重新选择用户名进行注册');history.back();
    }
    </script>
REG;
}
?>