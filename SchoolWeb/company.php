<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>company</title>
	<link rel="stylesheet" href="css/company.css">
	<script src="js/company.js"></script>
</head>
<body style="overflow-x:hidden">
	<div class="nav">

	     <nav>
	     	<ul>
				<?php	
				error_reporting(0);
				if($_SESSION['compword'] == NULL){
				echo'<li><a href="http://127.0.0.1/school_work/Ume.php"style="color:#E3E532;border-bottom: 3px solid #E3E532;">首页</a></li>';
		        echo'<li><a href="company.php">公司</a></li>';
		        echo'<li><a href="#">内推</a></li>';
		        echo'<li><a href="#">加油站</a></li>';
		        echo'<li><li><a href="#">个人中心</a></li></li>';
				echo "<div class='login'><a href='Company/login.php'>登陆</a><span></span>";
		        echo "<a href='Company/zhuce.php'>注册</a>";
				}
				else{
			    //echo'<li><a href="http://127.0.0.1/school_work/Ume.php"style="color:#E3E532;border-bottom: 3px solid #E3E532;">首页</a></li>';
			    echo'<li><a href="http://127.0.0.1/school_work/company.php"style="color:#E3E532;border-bottom: 3px solid #E3E532;">公司</a></li>';
				echo'<li><a href="">个人中心</a></li>';
				echo'<li><a href="">简历管理</a></li>';
				echo'<li><a href="http://localhost/school_work/Company/fabu/post-office.php">发布职位</a></li>';
				
				echo "<div class='login'><a href='login.php'>".$_SESSION['compword']."</a>";
		        echo "<a href='company.php?action=logdown'>注销</a>";
				}
				if($_GET['action'] == 'logdown'){
		         session_destroy();
		         header("Location:./company.php");
	            }
				?>
				
	     	</ul>
	     </nav>
	
	

    </div>
	<div id="container">
    <div id="list" style="left: -1362px;">
        <img src="img/comlun4.png" alt="4"/>
        <img src="img/comlun1.png" alt="1"/>
        <img src="img/comlun2.png" alt="2"/>
        <img src="img/comlun3.png" alt="3"/>
        <img src="img/comlun4.png" alt="4"/>
        <img src="img/comlun1.png" alt="1"/>
    </div>
    <div id="buttons">
        <span index="1" class="on"></span>
        <span index="2"></span>
        <span index="3"></span>
        <span index="4"></span>
    </div>
    <a href="javascript:;" id="prev" class="arrow">&lt;</a>
    <a href="javascript:;" id="next" class="arrow">&gt;</a>
   </div>
<div class="content">
<div class="content-left">
<div class="positionHead" id="positionHead">
	<div class="filterBox">
		<dl>
		<dt>公司地点:</dt>
			<dd>
				<a href="#">全国</a> <a href="#">北京</a> 
				<a href="#">上海</a><a href="#"> 深圳 </a>
				<a href="#">广州</a> <a href="#">杭州</a> 
				<a href="#">成都</a><a href="#"> 南京 </a>
				<a href="#">厦门</a> <a href="#">长沙</a> 
				</dd><p><a href="#">更多</a></p>
		</dl>
			<dl>
		<dt>发展阶段:</dt>
			<dd>
				<a href="#">不限</a> <a href="#">初创型</a> <a href="#">成长型</a> <a href="#">成熟型 </a><a href="#">已上市</a>
			</dd><p><a href="#">更多</a></p>
		</dl>
			<dl>
		<dt>行业领域:</dt>
			<dd><a href="#">不限</a>
				<a href="#">移动互联网</a> <a href="#">电子商务</a> <a href="#">金融</a>
				 <a href="#"> 企业服务 </a><a href="#">教育</a> <a href="#">文化娱乐</a>
				<a href="#">游戏</a>
			</dd><p><a href="#">更多</a></p>
		</dl>
	</div>
	<div class="order">

				<dl>
		<dt>排序方式:</dt>
			<dd><a href="#">默认排序</a>
				<a href="#">职位数量 ↓</a> <a href="#">面试评价数↓</a> 
				<a href="#">简历处理率↓</a>
				 
			</dd>
		</dl>
	</div>
</div>
<div class="company_list">
<div class="meila">
<div class="item_cont">
	<a href="#"><img src="img/meila.png" alt=""></a>
	<dl>
		<dt><a href="#">美啦</a></dt>
		<dd><a href="#"><span>118</span>条面试评价</a>
		<a href="#"><span>38</span>个在招职位</a>
		<a href=""><span>85%</span>面试处理率</a>
		</dd>
	</dl>
	<p>在美啦，遇见最美的自己</p>
</div>
<div class="company_state">
	<em>社交网络</em><em>成熟型</em><em>深圳</em>
</div>
 </div>
 <div class="meila">
<div class="item_cont">
	<a href="#"><img src="img/meila2.png" alt=""></a>
	<dl>
		<dt><a href="#">美啦</a></dt>
		<dd><a href="#"><span>118</span>条面试评价</a>
		<a href="#"><span>38</span>个在招职位</a>
		<a href=""><span>85%</span>面试处理率</a>
		</dd>
	</dl>
	<p>在美啦，遇见最美的自己</p>
</div>
<div class="company_state">
	<em>社交网络</em><em>成熟型</em><em>深圳</em>
</div>
 </div>
 <div class="meila">
<div class="item_cont">
	<a href="#"><img src="img/meila3.jpg" alt=""></a>
	<dl>
		<dt><a href="#">美啦</a></dt>
		<dd><a href="#"><span>118</span>条面试评价</a>
		<a href="#"><span>38</span>个在招职位</a>
		<a href=""><span>85%</span>面试处理率</a>
		</dd>
	</dl>
	<p>在美啦，遇见最美的自己</p>
</div>
<div class="company_state">
	<em>社交网络</em><em>成熟型</em><em>深圳</em>
</div>
 </div>
 <div class="meila">
<div class="item_cont">
	<a href="#"><img src="img/meila4.png" alt=""></a>
	<dl>
		<dt><a href="#">美啦</a></dt>
		<dd><a href="#"><span>118</span>条面试评价</a>
		<a href="#"><span>38</span>个在招职位</a>
		<a href=""><span>85%</span>面试处理率</a>
		</dd>
	</dl>
	<p>在美啦，遇见最美的自己</p>
</div>
<div class="company_state">
	<em>社交网络</em><em>成熟型</em><em>深圳</em>
</div>
 </div>
  <div class="meila">
<div class="item_cont">
	<a href="#"><img src="img/meila2.png" alt=""></a>
	<dl>
		<dt><a href="#">美啦</a></dt>
		<dd><a href="#"><span>118</span>条面试评价</a>
		<a href="#"><span>38</span>个在招职位</a>
		<a href=""><span>85%</span>面试处理率</a>
		</dd>
	</dl>
	<p>在美啦，遇见最美的自己</p>
</div>
<div class="company_state">
	<em>社交网络</em><em>成熟型</em><em>深圳</em>
</div>
 </div>
 <div class="meila">
<div class="item_cont">
	<a href="#"><img src="img/meila3.jpg" alt=""></a>
	<dl>
		<dt><a href="#">美啦</a></dt>
		<dd><a href="#"><span>118</span>条面试评价</a>
		<a href="#"><span>38</span>个在招职位</a>
		<a href=""><span>85%</span>面试处理率</a>
		</dd>
	</dl>
	<p>在美啦，遇见最美的自己</p>
</div>
<div class="company_state">
	<em>社交网络</em><em>成熟型</em><em>深圳</em>
</div>
 </div>

 <div class="meila">
<div class="item_cont">
	<a href="#"><img src="img/meila4.png" alt=""></a>
	<dl>
		<dt><a href="#">美啦</a></dt>
		<dd><a href="#"><span>118</span>条面试评价</a>
		<a href="#"><span>38</span>个在招职位</a>
		<a href=""><span>85%</span>面试处理率</a>
		</dd>
	</dl>
	<p>在美啦，遇见最美的自己</p>
</div>
<div class="company_state">
	<em>社交网络</em><em>成熟型</em><em>深圳</em>
</div>
 </div>
 <div class="meila">
<div class="item_cont">
	<a href="#"><img src="img/meila.png" alt=""></a>
	<dl>
		<dt><a href="#">美啦</a></dt>
		<dd><a href="#"><span>118</span>条面试评价</a>
		<a href="#"><span>38</span>个在招职位</a>
		<a href=""><span>85%</span>面试处理率</a>
		</dd>
	</dl>
	<p>在美啦，遇见最美的自己</p>
</div>
<div class="company_state">
	<em>社交网络</em><em>成熟型</em><em>深圳</em>
</div>
 </div>

</div>
<div class="pager_container">
<span >上一页</span>
<span class="pager_is_current">1</span>
<span >2</span>
<span >3</span>
...
<span >20</span>
<span >下一页</span>
</div>
</div>
<div class="sideBar">
	<ul>
		<li><a href="#"><img src="img/liwu.png" alt=""> 礼物约</a></li>
		<li><a href="#"><img src="img/liwu2.png" alt=""> 你在干嘛</a></li>
		<li><a href="#"><img src="img/liwu3.png" alt=""> 师徒部落</a></li>
        <li><a href="#"><img src="img/liwu4.jpg" alt=""> 疯密</a></li>
	</ul>
</div>
</div>
</body>
</html>