<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>companyinfo</title>
	<link rel="stylesheet" href="../css/post-office.css">
	<link rel="stylesheet" type="text/css" href="../css/city-picker.css">
	<script type="text/javascript" src="../js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="../js/cityData.js"></script>
<script type="text/javascript" src="../js/IIInsomniaCityPicker.js"></script>
<script  src="../js/post-office.js"></script>
</head>
<body>
<form action="company_update.php" method="post" id="biao">
<div class="post-office">
        <ul class="clearfix post-office-title">
            <li class="lf post-office-title-h"><h4>公司信息</h4></li>
            <li class="rt post-office-title-c"><span class="clr">*</span>为必填项</li>
        </ul>
        <div class="company-brief">
                    <div class="clearfix company-name mt17">
                        <span class="lf company-name-title db clr5 "><span class="clr dib vmd ">*</span>公司名称</span>
                        <div class="lf company-name-cn relative abox" id="companyn">
    
                            <input name="company_name" type="text" class="absolute input-box ainput" value="填写与营业执照一致的名称，一经发布无法修改！" id="companyname" maxlength="50" onblur="DisInfo(this)">
                        </div>
                    </div><p class="form-validate-prompt">忘记填写公司名称了哦！</p>

                <div class="clearfix company-name mt17">
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>公司帐号</span>
                    <div class="lf company-name-cn relative abox" id="positionn">
                        
                        <input name="company_word" type="text" class="absolute input-box ainput" id="jobtitle" maxlength="50" onblur="DisInfo(this)">
                    </div>
                </div><p class="form-validate-prompt">请填写帐号</p>   
        </div>
    <div class="relative">
        <div class="company-Internship">
        </div>
        <div class="company-internship" id="internshipc">
            <!-- 实习 -->
            <div class="company-Internship-list company-internship relative">
                <div class="clearfix company-name mt17">
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>公司地址</span>
                    <div class="lf company-name-cn relative Internship-w-small">
                        <!--选择省份-->	
                        <span class="absolute default size-Span" style="display: block;"></span>
                        <!--<p class="select"  style="position: absolute; left: 0;">-->
                        <input name="company_city" class="size-input" readonly="readonly" type="text" value="大连市" name="workCity" id="city" data-id="" onblur="DisInfo(this)">
                        <!--</p>-->
                        <span class="absolute education-icon"></span>
                    </div>
                    <div class="lf company-name-cn relative Internship-w-big" id="dizhi">
                        <span class="absolute default db"></span>
                        <input name="company_loc" type="text" class="absolute input-box" id="cityAddress" maxlength="100" value="请输入详细地址">
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
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd"></span> 公司规模</span>
                    <div class="lf company-name-cn relative Internship-w-small">
                        <i class="default db tar padr3">人</i>
                        <input name="company_size" type="text" class="absolute input-box" value="" id="employees" maxlength="2" onblur="DisInfo(this)">
                    </div>
                </div>

                <div class="clearfix company-name mt17 job-description">
                    <span class="lf company-name-title db clr5"><span class="clr dib vmd">*</span>公司描述</span>
                    <!--<div class="lf company-name-cn relative job-description-cn clra">
                        建议描述工作职责、任职要求等。请勿出现邮箱及外链，系统将自动删除
                    </div>-->
                </div>
                <div class="clearfix company-name text-area relative">
                    <textarea name="company_situation" id="description" class="textarea-cn relative" style="border-style: solid; border-color: #FFFFFF"></textarea>
                    <span class="absolute length"><i class="clr">2000</i>/2000</span>
                </div>
            </div><!-- 实习 -->
        </div>
    </div>

        <div class="next-step">
            <div class="next-step-cn">
                        <!--<a href="javascript:void(0);" class="dib">确认发布</a>-->
						<input class="submitBtn btn" type="submit" value="同意协议并注册">

            </div>
        </div>
    </div>
	</form>
</body>
</html>