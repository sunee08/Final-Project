<?php

include('../connect/connection.php');

extract($_GET);
$id_std = $id;
$sql = "delete from leaves where id_std= '$id'";

if ($db->query($sql)) {
    $db->close();

   
        header("Location: ../teacher/leave.php?success=1");

} else {
    echo $db->error;
    $db->close();
}
