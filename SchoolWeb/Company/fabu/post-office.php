<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>post-office</title>
	<link rel="stylesheet" href="../../css/style.css">
	<script src="../../js/home.js"></script>
	<link rel="stylesheet" href="../../css/post-office.css">
	<link rel="stylesheet" type="text/css" href="../../css/city-picker.css">
	<script type="text/javascript" src="../../js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="../../js/cityData.js"></script>
    <script type="text/javascript" src="../../js/IIInsomniaCityPicker.js"></script>
    <script  src="../../js/post-office.js"></script>
	<script charset="utf-8" src="kindeditor/kindeditor-all.js"></script>
    <script charset="utf-8" src="kindeditor/lang/zh-CN.js"></script>
</head>
<body>
<div class="nav">

	     <nav>
	     	<ul>
				<?php	
				error_reporting(0);
			    echo'<li><a href="http://127.0.0.1/school_work/Ume.php"style="color:#E3E532;border-bottom: 3px solid #E3E532;">首页</a></li>';
			    echo'<li><a href="http://127.0.0.1/school_work/company.php"style="color:#E3E532;border-bottom: 3px solid #E3E532;">公司</a></li>';
				echo'<li><a href="">个人中心</a></li>';
				echo'<li><a href="">简历管理</a></li>';
				echo'<li><a href="http://localhost/school_work/Company/fabu/post-office.php">发布职位</a></li>';
				//echo "欢迎用户:".$_SESSION['compword']."</a>";
					echo "<div class='login'><a href='login.php'>".$_SESSION['compword']."</a>";
				
			
				?>
				
	     	</ul>
	     </nav>
	
	

    </div>
<form action="office_handle.php" method="POST">
<div class="post-office">
        <ul class="clearfix post-office-title">
            <li class="lf post-office-title-h"><h4>职位信息</h4></li>
            <li class="rt post-office-title-c"><span class="clr">*</span>为必填项</li>
        </ul>
        <div class="company-brief">
                    <div class="clearfix company-name mt17">
                        <span class="lf company-name-title db clr5 "><span class="clr dib vmd ">*</span>公司名称</span>
                        <div class="lf company-name-cn relative abox" id="companyn">
    
                            <input type="text" class="absolute input-box ainput" value="填写与营业执照一致的名称，一经发布无法修改！" id="companyname" name="companyname" maxlength="50" onblur="DisInfo(this)">
                        </div>
                    </div><p class="form-validate-prompt">忘记填写公司名称了哦！</p>

                <div class="clearfix company-name mt17">
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>职位名称</span>
                    <div class="lf company-name-cn relative abox" id="positionn">
                        
                        <input type="text" class="absolute input-box ainput" value="标准的名称能帮你提高搜索排名，如：产品经理" id="jobtitle"  name="jobtitle" maxlength="50" onblur="DisInfo(this)">
                    </div>
                </div><p class="form-validate-prompt">忘记填写职位名称了哦！</p>
    <div class="clearfix company-name mt17 clr5 job-kind-zindex">
        <span class="lf company-name-title db"><span class="clr dib vmd">*</span>职位类型</span>
        <div class="lf company-name-cn relative" id="positioncategory">
            <span class="absolute default del-span-pos focus-input" style="display: inline-block;"></span>
            <input type="text" readonly="readonly" class="absolute input-box job-input" value="" onclick="jobsel(this)"onblur="DisInfo(this)"  id="jobcategory"  name="jobcategory" dataid="">
            <span class="absolute education-icon"></span>
            <div  id="jobchoice"class="absolute job-choice" style="display:none;">
            	<ul class="job-choice-left" style="display: block;">
            	<li id="10010" class="job-choice-left-li"><span>IT互联网</span></li>
            	<li id="10020" class="job-choice-left-li"><span>市场商务</span></li>
            	<li id="10030" class="job-choice-left-li"><span>工科相关</span></li>
            	<li id="10040" class="job-choice-left-li"><span>人事行政</span></li>
            	<li id="10050" class="job-choice-left-li"><span>外语贸易</span></li>
            	<li id="10060" class="job-choice-left-li"><span>财经法务</span></li>
            	<li id="10070" class="job-choice-left-li"><span>教育咨询</span></li>
            	<li id="10080" class="job-choice-left-li"><span>媒体设计</span></li>
            	<li id="10090" class="job-choice-left-li"><span>其他</span></li>
            	</ul>
            </div>
        </div>

    </div><p class="form-validate-prompt">忘记填写职位类别了哦！</p>
    
        </div>
    <div class="relative">
       
        <div class="company-internship" id="internshipc">
            <!-- 实习 -->
            <div class="company-Internship-list company-internship relative">
             
                        <div class="clearfix company-name mt17" id="daysweek" style="display: block;">
                            <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>每周至少</span>
                            <div class="lf company-name-cn relative Internship-w">
                                <i class="absolute default db tar">天</i>
                                <input type="text" class="absolute input-box" value="" id="internWorkDay" name="internWorkDay" onblur="DisInfo(this)" maxlength="3">
                            </div>
                        </div>
                        <div class="clearfix company-name mt17" id="worktime" style="display: block;">
                            <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>工作时长</span>
                            <div class="lf company-name-cn relative Internship-w">
                                <i class="absolute default db tar">个月</i>
                                <input type="text" class="absolute input-box" value="" id="interndeadline" name="interndeadline" onblur="DisInfo(this)" maxlength="3">
                            </div>
                        </div>

                        <div class="clearfix company-name mt17" id="monthsalary" style="display: block;">
                            <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>月薪范围</span>
                            <div class="lf company-name-cn relative Internship-w" id="monthwage1">
                               
                                <span class="rt tar ml70">元/月</span>
                                <input type="text" class="absolute input-box" value="最低月薪" id="monthBottomSalary" name="monthBottomSalary" maxlength="5" onblur="DisInfo(this)">
                            </div>
                            <div class="lf space-l">—</div>
                            <div class="lf company-name-cn relative Internship-w" id="monthwage2">
                             
                                <span class="rt tar ml70">元/月</span>
                                <input type="text" name="monthTopSalary" class="absolute input-box" value="最高月薪" id="monthTopSalary" maxlength="5" onblur="DisInfo(this)">
                            </div>
                        </div>

                <div class="clearfix company-name mt17">
                    <span  class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>学历要求</span>
                    <div class="lf company-name-cn relative educ-box" id="educationyw">
                    
                        <input name="education" onclick="xueli(this)" type="text" readonly="readonly" class="absolute input-box educ-input focus-input" value="请选择学历要求" id="xue" name="xue" onblur="DisInfo(this)">
                        <span class="absolute education-icon"></span>
                        <ul id="xueli" class="educ-input-box" style="z-index: 9999; display:none;"><li id="20" class="educ-input-li xueliLi">专科</li><li id="30" class="educ-input-li xueliLi">本科</li><li id="50" class="educ-input-li xueliLi">硕士</li><li id="70" class="educ-input-li xueliLi">博士</li></ul>
                    </div>
                </div>
                <div class="clearfix company-name mt17">
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>工作地址</span>
                    <div class="lf company-name-cn relative Internship-w-small">
                        <!--选择省份-->
                        <span class="absolute default size-Span" style="display: block;"></span>
                        <!--<p class="select"  style="position: absolute; left: 0;">-->
                        <input class="size-input" readonly="readonly" type="text" value="大连市" name="workCity" id="city" data-id="" onblur="DisInfo(this)">
                        <!--</p>-->
                        <span class="absolute education-icon"></span>
                    </div>
                    <div class="lf company-name-cn relative Internship-w-big" id="dizhi">
                        <span class="absolute default db"></span>
                        <input type="text" name="cityAddress" class="absolute input-box" id="cityAddress" maxlength="100" value="请输入详细地址">
                    </div>
                </div>

                <script>
    var cityPicker = new IIInsomniaCityPicker({
        data: data,
        target:'city',
        valType: 'k-v',
        hideCityInput: {
            name: 'city',
            id: 'city'
        },
        hideProvinceInput: {
            name: 'province',
            id: 'province'
        },
    });
     cityPicker.init();
</script> 

                <div class="clearfix company-name mt17">
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd"></span>  职位类别</span>
                    <div class="lf company-name-cn relative Internship-w-small">
                        <i class="default db tar padr3"></i>
                        <input type="text" name="job_family" class="absolute input-box" value="实习or全职" id="employees"  >
                    </div>
                </div>
<div class="clearfix company-name mt17" id="daysweek" style="display: block;">
                            <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>公司概况</span>
                            <div class="lf company-name-cn relative Internship-w" style="display:block;width:400px">
                                <i class="absolute default db tar"></i>
                                <input type="text" name="company_situation" class="absolute input-box" value="" id="internWorkDay" style="display:block;width:500px">
                            </div>
                        </div>
                        <div class="clearfix company-name mt17" id="daysweek" style="display: block;">
                            <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>福利待遇</span>
                            <div class="lf company-name-cn relative Internship-w" style="display:block;width:400px">
                                <i class="absolute default db tar"></i>
                                <input type="text" name="fuli" class="absolute input-box" value="" id="fuli" style="display:block;width:500px">
                            </div>
                        </div>
						<div class="clearfix company-name mt17" id="daysweek" style="display: block;">
                            <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>职位诱惑</span>
                            <div class="lf company-name-cn relative Internship-w" style="display:block;width:400px">
                                <i class="absolute default db tar"></i>
                                <input type="text" name="description" class="absolute input-box" value="" id="internWorkDay" style="display:block;width:500px">
                            </div>
                        </div>
<div class="clearfix company-name mt17" id="daysweek" style="display: block;">
                            <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>到期时间</span>
                            <div class="lf company-name-cn relative Internship-w" style="display:block;width:150px">
                                <i class="absolute default db tar"></i>
                                <input type="date" name="expiration_time" class="absolute input-box" value="" id="internWorkDay" style="display:block;width:150px">
                            </div>
                        </div>
                <div class="clearfix company-name mt17 job-description">
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>岗位职责</span>
                    <div class="lf company-name-cn relative job-description-cn clra">
                    
                    </div>
                </div>
                <div class="clearfix company-name text-area relative">
                    <textarea name="job_duties" id="editor_id" class="textarea-cn relative" style="border-style: solid; border-color: #FFFFFF"></textarea>
                    <span class="absolute length"><i class="clr">2000</i>/2000</span>
                </div>
                <div class="clearfix company-name mt17 job-description">
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>岗位要求</span>
                    <div class="lf company-name-cn relative job-description-cn clra">
                    </div>
                </div>
                <div class="clearfix company-name text-area relative">
                    <textarea name="job_entails" id="editor" class="textarea-cn relative" style="border-style: solid; border-color: #FFFFFF"></textarea>
                    <span class="absolute length"><i class="clr">2000</i>/2000</span>
                </div>
				
	<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id',{
                	height: '280px',
                	items:
                	[
        'source', '|', 'undo', 'redo', '|', 'preview',  'cut', 'copy', 'paste',
        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
        
       
    
]
                });
        });
		KindEditor.ready(function(K) {
                window.editor = K.create('#editor',{
                	height: '280px',
                	items:
                	[
        'source', '|', 'undo', 'redo', '|', 'preview',  'cut', 'copy', 'paste',
        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
]
                });
        });
</script>
            </div><!-- 实习 -->
        </div>
    </div>

        <div class="next-step">
            <div class="next-step-cn">
                        <input type="submit" class=" que" value="确认发布">

            </div>
        </div>
    </div>
	</form>
</body>
</html>