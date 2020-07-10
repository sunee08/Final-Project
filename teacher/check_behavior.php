<?php
require '../connect/connection.php';


$topic = $_POST['topic'];
$detail = $_POST['detail'];
$id_teacher = $_POST['id_teacher'];
$types_behavior = $_POST['types_behavior'];
$percent = $_POST['percent'];


$sql = "INSERT INTO behavior(topic,detail,id_teacher,types_behavior,percent)values('$topic','$detail','$id_teacher','$types_behavior','$percent')";

if ($rs = $db->query($sql)) {
    $db->close();
    header("Location: add_behavior.php?success=1");
} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('Try Again')</script>";
    echo "<script>window.open('add_behavior.php','_self')</script>";
}
