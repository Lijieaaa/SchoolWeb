<?php
    header("Content-type:image/png");
//用GD2库函数生成图片验证码
    $im=imagecreate(65,25);
    imagefill($im,0,0,imagecolorallocate($im,200,200,200));
//  $verify=$_GET['code'];
    $verify="";
    for($i=0;$i<4;$i++)   //产生4位随机数
    {
        $verify.=dechex(rand(0,15));//转成16进制
    }
    //
    imagestring($im,rand(3,5),10,3,substr($verify,0,1),imagecolorallocate($im,rand(1,255),0,rand(1,255)));
    imagestring($im,rand(3,5),25,3,substr($verify,1,1),imagecolorallocate($im,0,rand(1,255),rand(1,255)));
    imagestring($im,rand(3,5),36,3,substr($verify,2,1),imagecolorallocate($im,rand(1,255),rand(1,255),0));
    imagestring($im,rand(3,5),48,3,substr($verify,3,1),imagecolorallocate($im,rand(1,255),0,rand(1,255)));
    imagepng($im);//生成图像
    imagedestroy();//释放资源
    session_start();
    $_SESSION['code']=$verify;   //将生产的验证码保存到session['code']中
//  echo $_SESSION['code'];
?>