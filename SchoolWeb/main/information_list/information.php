<?php
include('../../connect.php');
$uid=intval($_GET['id']);//获取到上一列表对应的ID值
$sql="select * from job where id=$uid";
$query=mysqli_query($connect,$sql);
if($query&&mysqli_num_rows($query))
{
		$value = mysqli_fetch_assoc($query);
	}else{
		echo "当前没有招聘信息，请管理员在后台添加";
		exit;
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>information</title>
	<link rel="stylesheet" href="../../css/information.css">
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

	<div id="container">

		<div class="box">
			<div class="jb_det_left">
		<!--	
		if(empty($data))
		{	
			echo "当前没有招聘信息，请管理员在后台添加";
		}else
		{
			foreach($data as $value)
			{
			-->
				<div class="jb_det_left_top">
					<span class="job_name" title="行政助理"><?php echo $value['job_name'];?></span>
					<span class="update_time"><?php echo date('Y-m-d H:i:s',$value['update_time']);?>刷新</span><!--发布时间-->
				</div>
				<div class="jb_det_left_mid">
					<span class="daymoney"><?php echo $value['money_buttom'];?>-<?php echo $value['money_Top'];?>丨</span><!--工资-->
					
						<span class="city" title="北京 ">
						<?php echo $value['city'];?> 丨</span><!--所在城市-->
						<span class="education"><?php echo $value['education'];?> 丨</span><!--教育背景-->
						<span class="days"><?php echo $value['job_time'];?>/周  丨</span><!--工作时间-->
						<span class="month"><?php echo $value['job_family'];?></span><!--工作类型 实习or全职-->

						<p ><span class="youhuo">职位诱惑：</span><?php echo $value['youhuo'];?></p>
					</div>

					<p class="jb_description">职位描述</p>
					<div class="dec_content">岗位职责：<br> <br><?php echo $value['job_duties'];?><br> <br>岗位要求：<br> <br><?php echo $value['job_entails'];?><br> <br></div>
					<p class="closing_date">截止日期:
						<span class="date"><?php echo $value['expiration_time'];?></span>

						<div class="jb_det_left_bottom">

							<a class="com_res">投个简历</a>

						</div>
                               
					
					</div>
					<div class="jb_det_right">
						<div class="jb_det_right_top">
							<a href="#"><img src="../../img/chuchu.png" alt="" width="110" height="110"/></a>
							<p><a href="#"><?php echo $value['company_name'];?></a></p>
							<div class="infor"></div>

							<p class="scale">
								<span class="web_href">
									<img class="people" src="../../img/people.png" alt=""/>
									50-200人
								</span>
							</p>


							<p class="domain">
								<span class="web_href">
									<img class="pin" src="../../img/pin.png" alt=""/>
									<!--互联网-->
									<?php echo $value['family'];?><!--公司类型-->
								</span>
							</p>

						</div>
						<div class="jb_det_right_bottom">
							<p>
								<img class="gps" src="../../img/gps.png" />
								<span class="map_addr">
									<!--北京市海淀区知春路-->
								<?php echo $value['cityAddress'];?>	<!--公司地址-->
								</span>
							</p>
							<div id="mapBox"></div>
						</div>
					</div>
				</div>
</div>
	</body>
	</html>