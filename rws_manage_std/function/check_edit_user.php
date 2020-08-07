<?php
session_start();

include('../connect/connection.php');

    $id_teacher = $_POST['id_teacher'];

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];  
      $status = $_POST['status'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
      $tel = $_POST['tel'];
     $password = $_POST['password'];


  $sql = "UPDATE  teacher SET id_teacher = '$id_teacher',
   fullname = '$fullname',
   status='$status',
   username='$username',
 email  = '$email',
gender = '$gender',
tel='$tel',
password='$password'


WHERE id_teacher = '$id_teacher'";

    //ตรงนี้ if ,while สังเกตดีๆน่ะ ต้องมา ใช้ ของตัวเอง ระบบของตัวเองใช้ ยังไง ก็ ใช้ ตามนั้น

    if ($db->query($sql)) {
        $db->close();

     echo '<script> window.location="edit_users.php?id=' . $id_teacher . '"</script> ';

    } else {
        echo $db->error;
        $db->close();
    }


