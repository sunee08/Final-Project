<?php


if (empty($submit)) {

require '../connect/connection.php';


 $topic = $_POST['topic'];
$detail = $_POST['detail'];
$id_behavior = $_POST['id_behavior'];

$types_behavior = $_POST['types_behavior'];
$percent = $_POST['percent'];


    $sql = "UPDATE  behavior SET id_behavior = '$id_behavior', detail = '$detail'
 ,topic  = '$topic',
 types_behavior='$types_behavior',
 percent='$percent'

WHERE id_behavior = '$id_behavior'";

    //ตรงนี้ if ,while สังเกตดีๆน่ะ ต้องมา ใช้ ของตัวเอง ระบบของตัวเองใช้ ยังไง ก็ ใช้ ตามนั้น

 


if ($rs = $db->query($sql)) {
    $db->close();
  
            echo "<script>alert('แก้ไขข้อมูลสำเร็จ');window.location = \"add_behavior.php\";</script>";

} 
}else {
    echo $db->error;
    $db->close();

    echo "<script>alert('Try Again')</script>";
    echo "<script>window.open('penalty.php','_self')</script>";
}
