<?php

include_once("../connect.php");

$verify = stripslashes(trim($_GET['verify']));
$nowtime = time();
$query = mysqli_query($connect,"select id,token_exptime from user where status='0' and `token`='$verify'");
$row = mysqli_fetch_array($query);
if ($row) {
    if ($nowtime > $row['token_exptime']) { //30min
        $msg = '您的激活有效期已过，请登录您的帐号重新发送激活邮件.';
    } else {
        mysqli_query($connect,"update user set status=1 where id=" . $row['id']);
        if (mysqli_affected_rows($connect) != 1)
            die(0);
        $msg = "激活成功,请<a href='http://127.0.0.1/school_work/main/login/login.html'>登录!</a>";
		//echo $verify ;
		//echo'<script>window.location.href="http://localhost/school_work/main/zhuce/jihuoOK.php";</script>';
		echo"<script>alert('激活成功！');</script>";
		//echo'<script>window.location.href="http://localhost/school_work/main/login/login.html";</script>';
		echo'<script>window.location.href="http://localhost/school_work/main/user_information/user_information.php";</script>';
		//include_once("../user_information/user_information.php");
	
    }
}else {
    echo 'error.';
}

?>
