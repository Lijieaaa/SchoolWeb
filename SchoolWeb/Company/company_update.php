<?php
header("Content-type: text/html; charset=utf-8");
include_once("../connect.php");
$company_name = $_POST['company_name'];
$company_word = $_POST['company_word'];
$company_city = $_POST['company_city'];
$company_loc = $_POST['company_loc'];
$company_size = $_POST['company_size'];
$company_situation = $_POST['company_situation'];
$company_location = $company_city.$company_loc;
$sql_check = "select * from company_info where compword='$company_word';";
$update_check = mysqli_query($connect,$sql_check);
$update_array = mysqli_fetch_array($update_check);
if($update_array != false){
	$sql_update = "update company_info set company_name='$company_name',company_situation='$company_situation',company_location='$company_location',company_size='$company_size' where compword='$company_word';";
	mysqli_query($connect,$sql_update);
	//echo mysql_error();
	echo "恭喜您完成信息完善";
	echo "3秒后跳转到登录页面";
	header("refresh:3;url=login.php");
}
else{
	print <<< REG
	    <script>
window.onload=function a(){
    alert('对不起,你的用户名输入错误,请重新填写用户名');history.back();
    }
    </script>
REG;
}
?>