<?php
	require_once('../../connect.php');
	$sql="select * from job ";
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
<table border="1px" cellspacing=0 width="50%" align="center" >
<h3><p align="center">招聘信息管理</p></h3>
<tr align="center"><td>编号</td><td>公司名称</td><td>职位信息</td><td>状态</td><td>操作</td></tr>
<?php 
		if(!empty($data)){
			foreach($data as $value){
	?>
<tr align="center">
<td><?php echo $value['id'];?></td>
<td><?php echo $value['company_name'];?></td>
<td><?php echo $value['job_name'];?></td>
<td>
<?php if($value['checkid']==0){
	//echo'<a href="./handle/dis_job_information_handle.php?checkid=1">审核中</a>';
	echo"<a href='./handle/dis_job_information_handle.php?checkid=1&id=". $value["id"]."'>审核中</a>";
}
else{
	echo"已审核";
}
	?>
</td>
<td><a href="./handle/delete_job_information.php?id=<?php echo $value['id']?>">删除</a> <a href="./dis_job_detailed.php?id=<?php echo $value['id']?>">修改</a></td>
</tr>
<?php
        		}
		}
        ?>
</table>
</body>
</html>