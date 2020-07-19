<?php


if (empty($submit)) {

require '../connect/connection.php';


    $id_add_behavior = $_POST['id_add_behavior'];
    $penalty = $_POST['penalty'];
    $detail_penalty  = $_POST['detail_penalty'];


    $sql = "UPDATE  add_behavior SET id_add_behavior = '$id_add_behavior', penalty = '$penalty'
 ,detail_penalty  = '$detail_penalty'
WHERE id_add_behavior = '$id_add_behavior'";

    //ตรงนี้ if ,while สังเกตดีๆน่ะ ต้องมา ใช้ ของตัวเอง ระบบของตัวเองใช้ ยังไง ก็ ใช้ ตามนั้น

    if ($db->query($sql)) {
        $db->close();

        echo "<script>alert('สำเร็จ');window.location = \"penalty.php?id=' . $id_std . '\";</script>";

    } else {
        echo $db->error;
        $db->close();
    }
} else {
    echo "Function is not executed!";
}
