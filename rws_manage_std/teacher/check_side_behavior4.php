<?php
session_start();

require '../connect/connection.php';


$id_behavior = $_POST['id_behavior'];
$id_std = $_POST['id_std'];
$id_teacher  = $_POST['id_teacher'];
$std_name  = $_POST['std_name'];
$date_time  = $_POST['date_time'];
$time  = $_POST['time'];
$status  = $_POST['status'];



$sql = "INSERT INTO add_behavior(id_behavior,id_std,id_teacher,std_name,date_time,time,status)values('$id_behavior','$id_std','$id_teacher','$std_name','$date_time','$time','$status')";


if ($rs = $db->query($sql)) {
    $db->close();
     echo '<script> window.location="show4.php?id=' . $id_std . '"</script> ';

} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('Try Again')</script>";
    echo "<script>window.open('add_std_behavior4.php','_self')</script>";
}
