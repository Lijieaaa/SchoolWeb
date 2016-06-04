 <?php
include_once("../connect.php");
header('Content-Type:text/html;charset=utf-8');
function sendmail($time,$username,$url){
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
    $emailsubject = "Helloweba.com - 找回密码";
    $emailbody = "亲爱的".$username."：<br/>您在".$time."提交了找回密码请求。请点击下面的链接重置密码（按钮24小时内有效）。<br/><a href='".$url."' target='_blank'>".$url."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问。<br/>如果您没有提交找回密码请求，请忽略此邮件。";
    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
	return $rs;
}
	
$username = stripslashes(trim($_GET['username']));
$sql="select * from user where username='$username' ";
$query=mysqli_query($connect,$sql);
$num = mysqli_num_rows($query);
if($num == 0)
{
	echo'<script>alert("该邮箱尚未注册");</script>';
	exit;
}
else{
	$row = mysqli_fetch_array($query);
    $getpasstime = time();
    $uid = $row['id'];
    $token = md5($uid . $row['username'] . $row['password']);
    $url = "http://127.0.0.1/school_work/main/wjpasswd/reset.php?username=" . $username . "&token=" . $token;
    $time = date('Y-m-d H:i');
    $result = sendmail($time, $username, $url);
    if ($result == 1) {//邮件发送成功
	
	     $url_1 = "http://127.0.0.1/school_work/main/wjpasswd/index.html";
	    echo'<script>window.location.href=.$url_1.</script>';
	//header("location:xx.php?id=".$id);
	     header("location:http://127.0.0.1/school_work/main/wjpasswd/index.html?username=".$username);  //跳转回主页
        //$msg = '系统已向您的邮箱发送了一封邮件<br/>请登录到您的邮箱及时重置您的密码！';
        //更新数据发送时间
		//echo"<script>window.history.go();</script>";
        mysqli_query($connect,"update `user` set `getpasstime`='$getpasstime' where id='$uid '");
    } else {
        $msg = $result;
    }
    echo $msg;
}






?>