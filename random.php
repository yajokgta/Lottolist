<?php
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
$nen = rand(0,9);
$num = 0;

        header('Content-Type: image/jpeg');
        date_default_timezone_set("Asia/Bangkok");
        $datetime = date("d/m/2565");
        $imgPath = 'image.jpg';
        $font = "font/TEST1.TTF";
        $image = imagecreatefromjpeg($imgPath);
        $font_color = imagecolorallocate($image, 255, 255, 255);
        $stroke_color = imagecolorallocate($image, 0, 0, 0);
        $size = 26;
        $box = imagettfbbox($size, 0, $font, $name);
        $text_width = abs($box[2]) - abs($box[0]);
        $image_width = imagesx($image);
        $x = ($image_width - $text_width) / 2;

        if ($nen <= 4)
        {
                $num = $num1;
        }
        if ($nen >=5)
        {
                $num = $num2;
        }
        function imagettfstroketext(&$image, $size, $angle, $xx, $y, &$textcolor, &$strokecolor, $fontfile, $text, $px) {
                for($c1 = ($xx-abs($px)); $c1 <= ($xx+abs($px)); $c1++)
                    for($c2 = ($y-abs($px)); $c2 <= ($y+abs($px)); $c2++)
                        $bg = imagettftext($image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);
               return imagettftext($image, $size, $angle, $xx, $y, $textcolor, $fontfile, $text);
            }

        
        imagettfstroketext($image,$size,0,$x,285,$font_color,$stroke_color,$font,$name,2);
        imagettfstroketext($image,42,0,235,390,$font_color,$stroke_color,"font/TEST1.TTF",$rood,2); //วิ่งรูด
        imagettfstroketext($image,34,0,85,455,$font_color,$stroke_color,"font/TEST1.TTF",$j1,2);
        imagettfstroketext($image,34,0,165,455,$font_color,$stroke_color,"font/TEST1.TTF",$j2,2);
        imagettfstroketext($image,34,0,245,455,$font_color,$stroke_color,"font/TEST1.TTF",$j3,2);
        imagettfstroketext($image,34,0,325,455,$font_color,$stroke_color,"font/TEST1.TTF",$j4,2);
        imagettfstroketext($image,34,0,85,520,$font_color,$stroke_color,"font/TEST1.TTF",$j5,2);
        imagettfstroketext($image,34,0,165,520,$font_color,$stroke_color,"font/TEST1.TTF",$j6,2);
        imagettfstroketext($image,34,0,245,520,$font_color,$stroke_color,"font/TEST1.TTF",$j7,2);
        imagettfstroketext($image,34,0,325,520,$font_color,$stroke_color,"font/TEST1.TTF",$j8,2);
        imagettfstroketext($image,64,0,465,490,$font_color,$stroke_color,"font/TEST1.TTF","$num",2);
        imagettfstroketext($image,12,0,500,35,$font_color,$stroke_color,"font/TEST1.TTF",$datetime,2);
        //  imagejpeg($image);
        imagejpeg($image,"textOverlay.jpg", 100);
        header("Location: main.php?name=".$name);
?>