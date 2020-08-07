<?php
require '../connect/connection.php';




$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$status = $_POST['status'];


$sql = "INSERT INTO teacher(fullname,username,password,gender,tel,email,status,activate)values('$fullname','$username','$password','$gender','$tel','$email','$status','1')";

if ($rs = $db->query($sql)) {
    $db->close();

   echo "<script>alert('บันทึกข้อมูลแล้ว');window.location = \"add_user.php\";</script>";


} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('MAY YOUR Email Or ID are USED! Please! Try Again')</script>";
    echo "<script>window.open('register.php','_self')</script>";
}
