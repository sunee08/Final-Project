<?php

if (empty($submit)) {

 include('../connect/connection.php');


    $id_std = $_POST['id_std'];
    $fullname = $_POST['fullname'];
    $id_std_card = $_POST['id_std_card'];
    $id_card = $_POST['id_card'];
    $class_room = $_POST['class_room'];
    $birthday = $_POST['birthday'];
    $types = $_POST['types'];
    $status = $_POST['status'];
    $teacher = $_POST['teacher']; 
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $address = $_POST['address'];


  $sql = "UPDATE  student SET id_std = '$id_std',
   fullname = '$fullname'
 ,id_card  = '$id_card',
id_std_card = '$id_std_card',
class_room='$class_room',
 birthday  = '$birthday',
types = '$types',
status='$status',
teacher='$teacher',
tel='$tel',
address='$address',
email='$email'

WHERE id_std = '$id_std'";

    if ($db->query($sql)) {
        $db->close();

     echo '<script> window.location="edit_profile1.php?id=' . $id_std . '"</script> ';

    } else {
        echo $db->error;
        $db->close();
    }
} else {
    echo "Function is not executed!";
}
