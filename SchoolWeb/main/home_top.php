<?php 
session_start();
error_reporting(0);
				
if($_SESSION['username']!=null)
{
  echo'<li><a href="http://127.0.0.1/school_work/Ume.php"style="color:#E3E532;border-bottom: 3px solid #E3E532;">首页</a></li>';
  echo'<li><a href="http://127.0.0.1/school_work/main/personal.php">我的简历</a></li>';
  echo'<li><a href="http://127.0.0.1/school_work/main/user_information/dis_user_information.php">个人信息</a></li>';
  echo'<li><li><a href="http://127.0.0.1/school_work/main/wjpasswd/user_password.php">修改密码</a></li></li>';
  //echo'<div class="login">';
  echo "&nbsp;&nbsp;&nbsp;";
  echo "欢迎您：".$_SESSION['username']."用户";	    
//echo'</div>';
			   }
			   else{
				   echo'<li><a href="http://127.0.0.1/school_work/Ume.php"style="color:#E3E532;border-bottom: 3px solid #E3E532;">首页</a></li>';
		        echo'<li><a href="http://127.0.0.1/school_work/company.php">公司</a></li>';
		        echo'<li><a href="#">内推</a></li>';
		        echo'<li><a href="#">加油站</a></li>';
		        echo'<li><li><a href="#">个人中心</a></li></li>';
				
				   
			   }
?>