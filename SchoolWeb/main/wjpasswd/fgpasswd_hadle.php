<?php
session_start();
error_reporting(0);
include_once("../connect.php");
header('Content-Type:text/html;charset=gbk');
$password = md5(trim($_POST['passwd']));
$username = stripslashes(trim($_POST['username']));
$row = "select id from `user` where `username`='$username'";
$query = mysqli_query($connect,$row);
$num = mysqli_num_rows($query);//�ж����ݿ����Ƿ���ڸ�ֵ
if($num==1)
{
$sql =("update `user` set `password`='$password' where username='$username '");
$query = mysqli_query($connect,$sql);
if (!$query) {
    echo 'error';
    exit;
} else {
	if($_SESSION['username']!=null)
	{
		echo'<script>alert("�޸�����ɹ�");window.location.href="http://127.0.0.1/school_work/Ume.php"</script>';
	}
	if($_SESSION['adminname']!=null){
		echo'<script>alert("�޸�����ɹ�");window.location.href="http://localhost/school_work/Administrator/home/personal.html"</script>';
	}
	if($_SESSION['username']!=null & $_SESSION['adminname']!=null )
	{
		echo'<script>alert("�޸�����ɹ�");window.location.href="http://localhost/school_work/main/login/login.html"</script>';
	}
    //echo '�޸�����ɹ�������<a href="http://127.0.0.1/school_work/Ume.php">��ҳ</a>';
}
}
else{
echo"�û���������";
}
?>