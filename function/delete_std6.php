<?php

include('../connect/connection.php');

extract($_GET);
$id_std = $id;
$sql = "delete from student where id_std= '$id'";

if ($db->query($sql)) {
    $db->close();


        echo "<script>alert('ลบข้อมูลแล้ว');window.location = \"../class study/m6_1.php\";</script>";

} else {
    echo $db->error;
    $db->close();
        echo "<script>alert('ลบข้อมูลไม่สำเร็จ โปรดลองอีกครั้ง')</script>";
    echo "<script>window.open('../class study/m1_1.php','_self')</script>";
}
