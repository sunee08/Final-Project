<?php
session_start();

require '../connect/connection.php';
$id_teacher = $_POST['id_teacher'];
$times_leaves = $_POST['times_leaves'];
$id_std = $_POST['id_std'];
$date_time = $_POST['date_time'];

$times  = $_POST['times'];

$percent  = $_POST['percent'];

$sql = "INSERT INTO leaves(times_leaves,id_teacher,id_std,date_time,times,percent)values('$times_leaves','$id_teacher','$id_std','$date_time','$times','$percent')";


if ($rs = $db->query($sql)) {
    $db->close();
    header("Location: leave.php?success=1");
} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('Try Again')</script>";
    echo "<script>window.open('test.php','_self')</script>";
}
