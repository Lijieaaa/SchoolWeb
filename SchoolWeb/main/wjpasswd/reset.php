<?php
include_once("../connect.php");
header('Content-Type:text/html;charset=utf-8');
$token = stripslashes(trim($_GET['token']));
$username = stripslashes(trim($_GET['username']));
$sql="select * from user where username='$username' ";
$query = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($query);
if($row){
	$mt = md5($row['id'].$row['username'].$row['password']);
	if($mt==$token){
		if(time()-$row['getpasstime']>24*60*60){
			$msg = '�������ѹ��ڣ�';
		}else{
			//��������...
			//$msg = '�������������룬��ʾ�����������<br/>����ֻ����ʾ���Թ���';
			echo "<script >
			window.location.href='http://127.0.0.1/school_work/main/wjpasswd/fgpasswd.html';</script>";
		}
	}else{
		$msg =  '��Ч������<br/>'.$mt.'<br/>'.$token;
	}
}else{
	$msg =  '��������ӣ�';	
}
echo $msg;
?>