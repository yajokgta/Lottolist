
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/generate.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<title>สร้างโพยหวย</title>
</head>
<body>
<center><a href="http://localhost/textOverlay.jpg" target="_blank"><img src="textOverlay.jpg" width="600" height="600"></img></a></center>
  <center>
<form method="post">

<center><table>
      <tr>
        <th>วิ่ง-รูด</th>
        </tr>
        <td><input type="text" name="rood" id="rood" maxlength="3" placeholder="0-0" ></td>
</table></center>
<center><table>
        <tr>
        <th>เจาะแถวบน1</th>
        <th>เจาะแถวบน2</th>
        <th>เจาะแถวบน3</th>
        <th>เจาะแถวบน4</th></tr>
        <tr>
        <td><input type="text" name="n1" id="n1" maxlength="2" ></td>
        <td><input type="text" name="n2" id="n2" maxlength="2" ></td>
        <td><input type="text" name="n3" id="n3" maxlength="2" ></td>
        <td><input type="text" name="n4" id="n4" maxlength="2" ></td></tr>
 </table></center>
 <center><table>
        <tr>
        <th>เจาะแถวล่าง1</th>
        <th>เจาะแถวล่าง2</th>
        <th>เจาะแถวล่าง3</th>
        <th>เจาะแถวล่าง4</th>      
        </tr>
        <tr>
        <td><input type="text" name="n5" id="n5" maxlength="2" ></td>
        <td><input type="text" name="n6" id="n6" maxlength="2" ></td>
        <td><input type="text" name="n7" id="n7" maxlength="2" ></td>
        <td><input type="text" name="n8" id="n8" maxlength="2" ></td>
        </tr>
  </table></center>
  <center><table>
        <tr>
        <th>เน้นอัด</th></tr>
        <tr>
        <td><input type="text" name="num" id="num" maxlength="1" ></td>
        </tr>
    </table></center>
  <a href="http://localhost/generate.php?name=<?php echo $_GET['name'];?>"  class="btn-3d green">กดที่นี้เพื่อสร้างเอง</a>
  <a href="http://localhost/random.php?name=<?php echo $_GET['name'];?>"  class="btn-3d green">กดที่นี้เพื่อสุ่ม</a>
  <a href="http://localhost/" class="btn-3d green" onClick="window.location.reload();">กลับหน้าหลัก</a>
</form><br>


<br/> 
</body>
