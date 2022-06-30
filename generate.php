<<<<<<< HEAD
<?php

$rood = $_POST['rood'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$n6 = $_POST['n6'];
$n7 = $_POST['n7'];
$n8 = $_POST['n8'];
$num = $_POST['num'];
$name = $_GET['name'];

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
        imagettftext($image,34,0,85,455,$color,"font/TEST1.TTF",$n1);
        imagettftext($image,34,0,165,455,$color,"font/TEST1.TTF",$n2);
        imagettftext($image,34,0,245,455,$color,"font/TEST1.TTF",$n3);
        imagettftext($image,34,0,325,455,$color,"font/TEST1.TTF",$n4);
        imagettftext($image,34,0,85,520,$color,"font/TEST1.TTF",$n5);
        imagettftext($image,34,0,165,520,$color,"font/TEST1.TTF",$n6);
        imagettftext($image,34,0,245,520,$color,"font/TEST1.TTF",$n7);
        imagettftext($image,34,0,325,520,$color,"font/TEST1.TTF",$n8);
        imagettftext($image,64,0,465,490,$color,"font/TEST1.TTF","$num");
        imagettftext($image,12,0,500,35,$color,"font/TEST1.TTF",$datetime);
      //  imagejpeg($image);
        imagejpeg($image,"textOverlay.jpg", 100);
        header("Location: main.php?name=".$name);
        
 
        
=======
<?php

$rood = $_POST['rood'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$n6 = $_POST['n6'];
$n7 = $_POST['n7'];
$n8 = $_POST['n8'];
$num = $_POST['num'];
$name = $_GET['name'];

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
        imagettftext($image,34,0,85,455,$color,"font/TEST1.TTF",$n1);
        imagettftext($image,34,0,165,455,$color,"font/TEST1.TTF",$n2);
        imagettftext($image,34,0,245,455,$color,"font/TEST1.TTF",$n3);
        imagettftext($image,34,0,325,455,$color,"font/TEST1.TTF",$n4);
        imagettftext($image,34,0,85,520,$color,"font/TEST1.TTF",$n5);
        imagettftext($image,34,0,165,520,$color,"font/TEST1.TTF",$n6);
        imagettftext($image,34,0,245,520,$color,"font/TEST1.TTF",$n7);
        imagettftext($image,34,0,325,520,$color,"font/TEST1.TTF",$n8);
        imagettftext($image,64,0,465,490,$color,"font/TEST1.TTF","$num");
        imagettftext($image,12,0,500,35,$color,"font/TEST1.TTF",$datetime);
      //  imagejpeg($image);
        imagejpeg($image,"textOverlay.jpg", 100);
        header("Location: main.php?name=".$name);
        
 
        
>>>>>>> 52e1a487435cc63cea88a5cfb272c1b77e5b5ac0
?>