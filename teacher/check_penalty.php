<?php
session_start();
$id_teacher = $_SESSION['id'];
require '../connect/connection.php';
$id = $_GET['id'];

$penalty = $_POST['penalty'];
$detail_penalty  = $_POST['detail_penalty'];





$sql = "UPDATE add_behavior SET penalty = '$penalty', detail_penalty ='$detail_penalty' WHERE id_std = '$id'";



if ($db->query($sql)) {
    $db->close();
        echo "<script>alert('สำเร็จ');window.location = \"penalty.php?id=' . $id_std . '\";</script>";
} else {
    echo $db->error;
    $db->close();
}
