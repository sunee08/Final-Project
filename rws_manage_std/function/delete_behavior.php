<?php

include('../connect/connection.php');

extract($_GET);
$id_std = $id;
$sql = "delete from add_behavior where id_std= '$id'";

if ($db->query($sql)) {
    $db->close();

   
        header("Location: ../teacher/result.php?success=1");

} else {
    echo $db->error;
    $db->close();
}
