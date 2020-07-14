<?php

require '../connect/connection.php';

session_start();

header('Content-Type: application/json');

$con = mysqli_connect("localhost", "root", "", "rws_manage_std");

// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();


     

    $my_id = $_GET['id'];

    $result = mysqli_query($con, " SELECT behavior.topic,behavior.percent,behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior,add_behavior.date_time,add_behavior.std_name
FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
       WHERE add_behavior.id_std 
 ");


    while ($row = $result->fetch_object()) {

        $point = array("label" => $row->std_name, "y" => $row->id_behavior);

        array_push($data_points, $point);
    }

    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);
