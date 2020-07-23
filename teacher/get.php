<?php
header('Content-Type: application/json');

$con = mysqli_connect("localhost", "root", "", "rws_manage_std");
$con->set_charset("utf8");

// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();


    $result = mysqli_query($con, "SELECT DISTINCT SUM(add_behavior.status) AS status,(behavior.detail) AS detail  FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
 LEFT JOIN student ON student.id_std = add_behavior.id_std
     WHERE add_behavior.id_std
     GROUP BY (add_behavior.id_behavior)  ")

    ;



    while ($row = $result->fetch_object()) {
        
        $point = array("label" => $row->detail, "y" => $row->status);


        array_push($data_points, $point);
    }

    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);
?>