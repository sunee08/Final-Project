<?php

if (empty($submit)) {

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

    if ($db->query($sql)) {
        $db->close();

     echo '<script> window.location="../teacher/profile.php?id=' . $id_teacher . '"</script> ';

    } else {
        echo $db->error;
        $db->close();
    }
} else {
    echo "Function is not executed!";
}
