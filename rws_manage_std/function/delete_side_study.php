<?php

include('../connect/connection.php');

extract($_GET);
$id_std = $id;
$sql = "delete from behavior where id_behavior= '$id'";

if ($db->query($sql)) {
    $db->close();


        echo "<script>alert('ลบข้อมูลแล้ว');window.location = \"../teacher/add_behavior.php\";</script>";

} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('ลบข้อมูลไม่สำเร็จ โปรดลองอีกครั้ง')</script>";
    echo "<script>window.open('../teacher/add_behavior.php','_self')</script>";
}
