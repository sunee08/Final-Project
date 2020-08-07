<?php
session_start();
include('../connect/connection.php');




$strSQL = "SELECT * FROM behavior WHERE id_behavior='" . $_GET['id'] . "'";

if ($result = $db->query($strSQL)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {

            $_GET['id'] = $row->id_behavior;



        }

        $result->free();

    

    } else {
        header("Location: std_behavior1_3.php");
    }

}

if ($db->query($strSQL)) {
    $db->close();

} else {
    echo $db->error;
    $db->close();
}
