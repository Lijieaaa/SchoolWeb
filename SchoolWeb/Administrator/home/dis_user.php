<?php
	require_once('../../connect.php');
	$sql="select * from user ";
	$query=mysqli_query($connect,$sql);
	if($query&&mysqli_num_rows($query)){
		while($row =mysqli_fetch_assoc($query)){
			$data[] = $row;
		}
	}else{
		$data = array();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<link rel="stylesheet" href="./dis_information.css">
<style>
body{
	font-family: 'Open Sans', sans-serif;
	background: url(../../img/repwdbg.jpg) no-repeat #fff;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
	font-weight: 300;
}
</style>
</head>
<body>
<table border="1px" cellspacing=0 width="75%" height="100%" align="center" >
<h3><p align="center">用户信息管理</p></h3>
<tr align="center"><td>编号</td><td>用户名</td><td>密码</td><td>注册时间</td><td>操作</td></tr>
<?php 
		if(!empty($data)){
			foreach($data as $value){
	?>
<tr align="center">
<td><?php echo $value['id']?></td>
<td><?php echo $value['username'];?></td>
<td><?php echo $value['password'];?></td>
<td><?php echo  date("Y-m-d h:i:s", $value['regtime']);?></td>
<td><a href="./handle/delete_user.php?username=<?php echo $value['username']?>">删除</a> <a href="http://127.0.0.1/school_work/main/wjpasswd/fgpasswd.html">修改</a> <a href="dis_user_information.php?username=<?php echo $value['username']?>">个人资料</a></td>
</tr>
 <?php
        		}
		}
        ?>
</table>
</body>
</html>