<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>repwd</title>
<link rel="stylesheet" href="../../css/repwd.css">
	<link rel="stylesheet" href="../../css/style.css">
<style>
	p{
		font-size: 12px;color: red;
		text-align: center;
	}

</style>
</head>
<body>
<div class="nav">
	     <nav>
	     	<ul>
			<?php
				include('../home_top.php');
				?>
				
	     	</ul>
	     </nav>
    </div>
 <div class="repwd">
    <h1><span></span></h1>
<form action="fgpasswd_hadle.php"method="post" class="form">
	<input type="email" name="username" id="username" autofocus="autofocus" class="active textbox" placeholder="请输入注册时email"required="required">
 	<input type="password" name="passwd" id="passwd" class="textbox"placeholder="请输入重置密码"required="required"value="">
 	<input type="password"  name="cpasswd" id="cpasswd" class="textbox"placeholder="确认密码"required="required"value="">
    <p id="psw"></p>
 	<input type="submit" value="确认">



</form>
 	
<script>
	var ps1=document.getElementsByTagName('input')[1];
	var ps2=document.getElementsByTagName('input')[2];
	var sub=document.getElementsByTagName('input')[3];
	var psw=document.getElementById('psw');

	sub.onclick=function() {
	if (ps1.value==ps2.value){
      psw.innerHTML="";
	}else{
   psw.innerHTML="两次密码输入不一致!";
     return false;
	}

	}


</script>
 </div>
</body>
</html>