<?php
    header("Content-type:image/png");
//��GD2�⺯������ͼƬ��֤��
    $im=imagecreate(65,25);
    imagefill($im,0,0,imagecolorallocate($im,200,200,200));
//  $verify=$_GET['code'];
    $verify="";
    for($i=0;$i<4;$i++)   //����4λ�����
    {
        $verify.=dechex(rand(0,15));//ת��16����
    }
    //
    imagestring($im,rand(3,5),10,3,substr($verify,0,1),imagecolorallocate($im,rand(1,255),0,rand(1,255)));
    imagestring($im,rand(3,5),25,3,substr($verify,1,1),imagecolorallocate($im,0,rand(1,255),rand(1,255)));
    imagestring($im,rand(3,5),36,3,substr($verify,2,1),imagecolorallocate($im,rand(1,255),rand(1,255),0));
    imagestring($im,rand(3,5),48,3,substr($verify,3,1),imagecolorallocate($im,rand(1,255),0,rand(1,255)));
    imagepng($im);//����ͼ��
    imagedestroy();//�ͷ���Դ
    session_start();
    $_SESSION['code']=$verify;   //����������֤�뱣�浽session['code']��
//  echo $_SESSION['code'];
?>