<?php
require '../connect/connection.php';


$id_behavior = $_POST['id_behavior'];
$id_std = $_POST['id_std'];
$id_teacher  = $_POST['id_teacher'];



$sql = "INSERT INTO add_behavior(id_behavior,id_std,id_teacher)values('$id_behavior','$id_std','$id_teacher')";

if ($rs = $db->query($sql)) {
    $db->close();
     echo '<script> window.location="show.php?id=' . $id_std . '"</script> ';

} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('Try Again')</script>";
    echo "<script>window.open('add_std_behavior.php','_self')</script>";
}
