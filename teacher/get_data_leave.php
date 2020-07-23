<?php
header('Content-Type: application/json');

$con = mysqli_connect("localhost", "root", "", "rws_manage_std");
$con->set_charset("utf8");

// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();


    $result = mysqli_query($con, "SELECT DISTINCT SUM(leaves.times_leaves) AS times_leaves,(student.fullname) AS fullname  FROM student
 LEFT JOIN leaves ON student.id_std = leaves.id_std
     WHERE leaves.id_std
     GROUP BY (student.id_std)  ")

    ;



    while ($row = $result->fetch_object()) {
        
        $point = array("label" => $row->fullname, "y" => $row->times_leaves);


        array_push($data_points, $point);
    }

    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);
?>