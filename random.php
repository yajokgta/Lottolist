
<?php

srand(time());
$num1 = rand(0,9);

$num2 = rand(0,9);

$x1 = rand(0,9);

$n1 = rand(0,9);

$x2 = rand(0,9);

$n2 = rand(0,9);

$x3 = rand(0,9);

$n3 = rand(0,9);

$x4 = rand(0,9);

$n4 = rand(0,9);

$x5 = rand(0,9);

$n5 = rand(0,9);

$x6 = rand(0,9);

$n6 = rand(0,9);

$x7 = rand(0,9);

$n7 = rand(0,9);

$x8 = rand(0,9);

$n8 = rand(0,9);

$num = rand(0,9);

$j1 = "$x1$n1";
$j2 = "$x2$n2";
$j3 = "$x3$n3";
$j4 = "$x4$n4";
$j5 = "$x5$n6";
$j6 = "$x6$n6";
$j7 = "$x7$n7";
$j8 = "$x8$n8";
$rood = "$num1-$num2";
$name = $_GET["name"];

        header('Content-Type: image/jpeg');
        date_default_timezone_set("Asia/Bangkok");
        $imgPath = 'image.jpg';
        $font = "font/TEST1.TTF";
        $image = imagecreatefromjpeg($imgPath);
        $color = imagecolorallocate($image, 0, 0, 0);
        $size = 26;
        $box = imagettfbbox($size, 0, $font, $name);
        $text_width = abs($box[2]) - abs($box[0]);
        $image_width = imagesx($image);
        $x = ($image_width - $text_width) / 2;

        $datetime = date("d/m/2565");
        imagettftext($image,$size,0,$x,285,$color,$font,$name);
        imagettftext($image,42,0,235,390,$color,"font/TEST1.TTF",$rood); //วิ่งรูด
        imagettftext($image,34,0,85,455,$color,"font/TEST1.TTF",$j1);
        imagettftext($image,34,0,165,455,$color,"font/TEST1.TTF",$j2);
        imagettftext($image,34,0,245,455,$color,"font/TEST1.TTF",$j3);
        imagettftext($image,34,0,325,455,$color,"font/TEST1.TTF",$j4);
        imagettftext($image,34,0,85,520,$color,"font/TEST1.TTF",$j5);
        imagettftext($image,34,0,165,520,$color,"font/TEST1.TTF",$j6);
        imagettftext($image,34,0,245,520,$color,"font/TEST1.TTF",$j7);
        imagettftext($image,34,0,325,520,$color,"font/TEST1.TTF",$j8);
        imagettftext($image,64,0,465,490,$color,"font/TEST1.TTF","$num");
        imagettftext($image,12,0,500,35,$color,"font/TEST1.TTF",$datetime);
        //  imagejpeg($image);
        imagejpeg($image,"textOverlay.jpg", 100);
        header("Location: main.php?name=".$name);
?>