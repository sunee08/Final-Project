<?php

include('../connect/connection.php');

extract($_GET);
$id_teacher = $id;
$sql = "delete from teacher where id_teacher= '$id'";

if ($db->query($sql)) {
    $db->close();


        echo "<script>alert('ลบข้อมูลแล้ว');window.location = \"../teacher/add_user.php\";</script>";

} else {
    echo $db->error;
    $db->close();
        echo "<script>alert('ลบข้อมูลไม่สำเร็จ โปรดลองอีกครั้ง')</script>";
    echo "<script>window.open('../teacher/add_user.php','_self')</script>";
}
