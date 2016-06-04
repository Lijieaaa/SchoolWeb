<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../css/zhuce.css" />
<script type="text/javascript" src="../../js/zhuce.js" ></script>
</head>
 
<body>
<form id="biao"action="register.php" method="post"><div id="box">
    <!--会员名-->
    <h1>注册</h1>
    <div>
        <label>
            <span>账号：</span>
            <input type="text" class="text" name="username" id="user" placeholder="手机号/email"/>
        </label>
        <p class="msg">
            请输入手机号或email
        </p>
    </div>

 
    <!--密码-->
    <div id ="password">
        <label>
            <span>登陆密码：</span>
            <input type="password" class="text" name="password" id="pass"  />
        </label>
        <p class="msg password">
            <img src="../../img/x.jpg" width="10" height="10">
            5-16个字符，请使用字母加数字或符号组合密码，不能单独使用字母，数字或符号。
        </p>
        <div>
        <label>
            <span></span>
            <em class="active">弱</em>
            <em>中</em>
            <em>强</em>
        </label>
    </div>
    </div>
 
    
 
    <!--确认密码-->
    <div style="margin-top:40px" >
        <label>
            <span>确认密码：</span>
            <input type="password" class="text" disabled="" name="scpass" id="scpass"  />
        </label>
        <p class="msg">
            <img src="../../img/x.jpg" width="10" height="10">
                                请再输一次
        </p>
    </div>
 
    <!--验证码-->
    <div>
        <label>
            <span>验证码：</span>
            <input type="text" class="text" style="width:50px" name="passwordconfirm" id="passwordconfirm" />
			<img class="ver_img" id="re_confirm" onclick="this.src='./verify_code.php?'+Math.random()"  src="./verify_code.php"/>
			<a title="看不清?" href="http://127.0.0.1/school_work/main/zhuce/zhuce.php" >看不清?</a> 
        </label>
    </div>
 
    <!--提交按钮-->
    <div>
        <input class="submitBtn btn" type="submit" value="同意协议并注册">
    </div>
 </div>
</form>

</body>
</html>