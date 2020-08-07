<?php


if (empty($submit)) {

require '../connect/connection.php';


    $id_add_behavior = $_POST['id_add_behavior'];
    $penalty = $_POST['penalty'];
    $detail_penalty  = $_POST['detail_penalty'];
    $time  = $_POST['time'];


    $sql = "UPDATE  add_behavior SET id_add_behavior = '$id_add_behavior', penalty = '$penalty'
 ,detail_penalty  = '$detail_penalty',
 time  = '$time'
WHERE id_add_behavior = '$id_add_behavior'";

    //ตรงนี้ if ,while สังเกตดีๆน่ะ ต้องมา ใช้ ของตัวเอง ระบบของตัวเองใช้ ยังไง ก็ ใช้ ตามนั้น

 


if ($rs = $db->query($sql)) {
    $db->close();
    header("Location: penalty.php?success=1");
} 
}else {
    echo $db->error;
    $db->close();

    echo "<script>alert('Try Again')</script>";
    echo "<script>window.open('penalty.php','_self')</script>";
}
