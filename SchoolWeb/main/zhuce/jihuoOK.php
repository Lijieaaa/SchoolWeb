<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login ok</title>
	<style>	
 body{
 	background: #5DD494;
 }
 div{
 	width: 450px;height:250px;background:#fff;text-align: center;margin:150px auto;
 	box-shadow: 0 0 10px #F7F7F7;position: absolute;left: 0;right: 0;bottom: 0;top:0;
 	margin:auto;
 }
 .ok{
 	display: table-cell;vertical-align: middle;
 }
 h1{color: #848181;margin: 50px;text-align: center;}
 a{
 	text-decoration: none;display: inline-block;width: 100px;height: 40px;line-height: 40px;
 	background: #1BD6ED;color: #848181;margin:20px;font-weight: bold;
 }
 a:hover{
 	background: #3281F6;transition:.8s all;
 }
	</style>
</head>
<body>
	<div> <div class="ok">
		<h1>恭喜你！激活成功</h1>
		<h3>请填写您的个人信息！</h3>
     <a href="http://127.0.0.1/school_work/main/user_information/user_information.php?v="<?php echo $_GET['verify'];?> >完善个人资料</a>
   
	</div>
	</div>
</body>
</html>