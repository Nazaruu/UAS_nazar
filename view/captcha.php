<?php
    
    include '../controller/auth.php';
    $ctrl = new auth();
    session_start();

    //untuk mengacak captcha
    	$code = $ctrl->acakCaptcha();
    	$_SESSION["code"] = $code;
 
    //untuk mengatur lebar dan tinggi captcha
        $wh = imagecreatetruecolor(173, 50);
         
    //untuk mengatur background (kali ini sayay gunakan backgorund color biru)
        $bgc = imagecolorallocate($wh, 22, 86, 165);
         
    //untuk mengatur text color (kali ini saya gunakan color abu-abu)
        $fc = imagecolorallocate($wh, 223, 230, 233);
        imagefill($wh, 0, 0, $bgc);
         
    //untuk script ini berupa image , fontsize , string , fontcolor )
        imagestring($wh, 10, 50, 15,  $code, $fc);
         
    //untuk menyisipkan buat gambar
        header('content-type: image/jpg');
        imagejpeg($wh);
        imagedestroy($wh);

?>