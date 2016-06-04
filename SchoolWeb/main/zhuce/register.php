<?php

session_start();
include_once("../connect.php");
$username = stripslashes(trim($_POST['username']));
$verifycode=strtolower($_POST['passwordconfirm']);//验证码
//检测用户名是否存在
$query = mysqli_query($connect,"select id from user where username='$username'");
$num = mysqli_num_rows($query);
if ($num == 1) {
    echo '<script>alert("用户名已存在，请换个其他的用户名");window.history.go(-1);</script>';
    exit;
}
if($verifycode!=strtolower($_SESSION['code']))
{
	echo '<script>alert("验证码错误");window.history.go(-1);</script>';
    exit;
}
$password = md5(trim($_POST['password']));
//$email = trim($_POST['email']);
$regtime = time();
$token = md5($username . $password . $regtime); //创建用于激活识别码
$token_exptime = time() + 60 * 60 * 24; //过期时间为24小时后
$sql = "insert into `user` (`username`,`password`,`token`,`token_exptime`,`regtime`) values ('$username','$password','$token','$token_exptime','$regtime')";
mysqli_query($connect,$sql);

if (mysqli_insert_id($connect)) {//写入成功，发邮件
    include_once("smtp.class.php");
    $smtpserver = "smtp.163.com"; //SMTP服务器
    $smtpserverport = 25; //SMTP服务器端口
    $smtpusermail = "wuzhan0305@163.com"; //SMTP服务器的用户邮箱
    $smtpuser = "wuzhan0305@163.com"; //SMTP服务器的用户帐号
    $smtppass = "wuzhan0305"; //SMTP服务器的用户密码
    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
    $smtpemailto = $username;
    $smtpemailfrom = $smtpusermail;
    $emailsubject = "用户帐号激活";
    $emailbody = "亲爱的" . $username . "：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/><a href='http://127.0.0.1/school_work/main/zhuce/active.php?verify=" . $token . 
	"' target='_blank'>http://127.0.0.1/school_work/main/zhuce/active.php?verify=" . $token . "</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。
	<br/>若收件箱查无此邮件请查看垃圾箱</br>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'></p>";
    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
    if ($rs == 1) {
		//echo'<script>window.location.href="http://127.0.0.1/school_work/main/login/loginOK.html";</script>';
        //$msg = '<script>window.location.href="http://127.0.0.1/school_work/main/login/loginOK.html";</script><br/>请登录到您的邮箱及时激活您的帐号！';
		header("location:./applyOK.html"); 
    } else {
        //$msg = $rs;
		echo"<script>alert('error');window.history.go(-1);</script>";
    }
    //echo $msg;
}
?>