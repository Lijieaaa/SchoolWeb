<?php
include('../../connect.php');
require_once('page.class.php');
header("Content-Type:text/html;charset=UTF-8"); 
error_reporting(0);
//$key=mb_convert_encoding($_GET["keyword"], "utf-8", "gnk");  //转码
$key=$_POST["keyword"];
if(empty($key)){
$sql="select * from job order by checkid desc";
}
else{
	$sql="select * from job where job_name like '%$key%' order by checkid desc";
}
$query=mysqli_query($connect,$sql);
$data=array();
$rows=mysqli_num_rows($query);
$showrow = 3; //一页显示的行数
$curpage = empty($_GET['page']) ? 1 : $_GET['page']; //当前的页,还应该处理非数字的情况
$url = "?page={page}"; //分页地址，如果有检索条件 ="?page={page}&q=".$_GET['q']
$total =$rows; //记录总条数
if (!empty($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow))
    $curpage = ceil($total_rows / $showrow); //当前页数大于最后页数，取最后一页
//获取数据
$sql .= " LIMIT " . ($curpage - 1) * $showrow . ",$showrow;";
$query_1 = mysqli_query($connect,$sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" Content="text/html;charset=utf8"/>
  <title>webFE</title> 
  <link rel="stylesheet" href="../../css/webFE.css" /> 
 </head> 
 <body> 
 <form action="" method="POST">
  <div class="nav"> 
   <nav> 
   <ul> 
   <?php
   include('../home_top.php');
		      
   ?>
    </ul> 
   </nav> 
  </div> 
  <div class="search-wrapper"> 
   <div id="searchBar" class="search-bar"> 
    <div class="input-wrapper"> 
     <div class="keyword-wrapper"> 
      <input type="text" id="keyword"  name="keyword" autocomplete="off" maxlength="64" placeholder="请输入职位名称或公司名称" value="前端开发" class="ui-autocomplete-input" /> 
     </div> 
     <input type="submit" id="submit" value="搜索" /> 
    </div> 
    <div class="tab-wrapper"> 
     <a id="tab_pos" class="active" href="#">职位 ( <span>500+</span> ) </a> 
     <a id="tab_comp" class="disabled" href="#">公司 ( <span>0</span> ) </a> 
    </div> 
   </div> 
  </div> 

  <div class="content"> 
   <!-- 左侧 --> 
   <div class="content_left"> 
 <div class="positionHead" id="positionHead">
  <div class="filterBox">
    <dl>
    <dt>工作地点:</dt>
      <dd>
        <a href="#">全国</a> <a href="#">北京</a> 
        <a href="#">上海</a><a href="#"> 深圳 </a>
        <a href="#">广州</a> <a href="#">杭州</a> 
        <a href="#">成都</a><a href="#"> 南京 </a>
        <a href="#">厦门</a> <a href="#">长沙</a> 
        </dd><p><a href="#">更多</a></p>
    </dl>
      <dl>
    <dt>工作经验:</dt>
      <dd>
        <a href="#">不限</a> <a href="#">应届生</a> <a href="#">1年以下</a> <a href="#">1-3年 </a><a href="#">3年以上</a>
      </dd>
    </dl>
<dl>
    <dt>发展阶段:</dt>
      <dd>
        <a href="#">不限</a> <a href="#">初创型</a> <a href="#">成长型</a> <a href="#">成熟型 </a><a href="#">已上市</a>
      </dd>
    </dl>
      <dl>
    <dt>行业领域:</dt>
      <dd>
      <a href="#">不限</a>
        <a href="#">移动互联网</a> <a href="#">电子商务</a> <a href="#">金融</a>
         <a href="#"> 企业服务 </a><a href="#">教育</a> <a href="#">文化娱乐</a>
        <a href="#">游戏</a>
      </dd><p><a href="#">更多</a></p>
    </dl>
  </div>
  <div class="order">

        <dl>
    <dt>排序方式:</dt>
      <dd><a href="#">默认</a>
        <a href="#">最新</a>  <i>月薪：</i> <span href="#">不限</span>
        <i>工作性质：</i><span href="#">不限</span>
         
      </dd>
    </dl>
  </div>
</div>
<div class="position_list ">
  
  <ul class="con_list">
 
  <?php
      if($query&&$rows){
		while($row = mysqli_fetch_assoc($query_1)){
			$data[] = $row;
		}
	}
		if(empty($data)){	
			echo "当前没有招聘信息，请管理员在后台添加";
		}else{
			foreach($data as $value){
				//echo $value['job_name'];
			
	?>
<?php 
    if($value['checkid']==0)
	{
		continue;
	}
  ?>
  <li class="con_list_item">
        <div class="list_item_top">
            <div class="position">
                <div class="p_top">
                    <a class="position_link" href="information.php?id=<?php echo $value['id']?>" target="_blank">
                        <h2><?php echo $value['job_name'];?></h2><!--职位名称-->
                        <span class="add">[<?php echo $value['city'];?>]</span><!--所在城市-->
                    </a>
                    <span class="format-time"><?php echo date('H:i:s',$value['update_time']);?>发布</span><!--发布时间-->
                </div>
                <div class="p_bot">
                    <span class="money"><?php echo $value['money_buttom'];?>-<?php echo $value['money_Top'];?><!--最低工资-->
					</span><!--最高工资-->
                    <div class="li_b_l">
                        <!--<i></i>--> <?php echo $value['education'];?><!--工作经验/教育信息-->
                    </div>
                </div>
            </div>
            <div class="company">
                <div class="company_name">
                    <a href="#"  ><?php echo $value['company_name'];?></a><!--公司名称-->
                </div>
                <div class="industry">
                    <!--移动互联网 · 电子商务 / 成长型(B轮)-->
					<?php echo $value['company_situation'];?>
					<!--公司情况-->
                </div>
            </div>
            <div class="com_logo">
                <a href="http://www.lagou.com/gongsi/6140.html" target="_blank"><img src="../../img/meme.png" alt="么么嗖" width="60" height="60"></a>
            </div>
        </div>
        <div class="list_item_bot">
            <div class="li_b_l"><?php echo $value['youhuo'];?><!--职位描述--></div>
            <div class="li_b_r">
                   <span><?php $str=$value['fuli']; echo  mb_substr($str,0,4,"utf-8");?></span><!--福利-->
				   <span><?php  echo  mb_substr($str,5,4,"utf-8");?></span>
				   <span><?php echo  mb_substr($str,10,4,"utf-8");?></span>
				   <span><?php  echo  mb_substr($str,15,4,"utf-8");?></span>
						
            </div>
        </div>
    </li>
	<?php
	}
	}
	?>
  </ul>
</div>
<div class="pager_container">

                    <?php
                    if ($total > $showrow) {//总记录数大于每页显示数，显示分页
                        $page = new page($total, $showrow, $curpage, $url, 2);
                        echo $page->myde_write();
                    }
                    ?>
					</div>
					</div>
   <div class="content_right">
   <img src="../../img/duli.jpg" alt="">
   <img src="../../img/duli2.jpg" alt="">
   <img src="../../img/duli3.jpg" alt="">
     
   </div>
  </div>  
  </form>
 </body>
</html>