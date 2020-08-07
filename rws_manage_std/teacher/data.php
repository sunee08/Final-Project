<?php

	//ตั้งค่าการเชื่อมต่อฐานข้อมูล
	$database_host 			= 'localhost';
	$database_username 		= 'root';
	$database_password 		= '';
	$database_name 			= 'rws_manage_std';

	$mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);
	//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
	$mysqli->set_charset("utf8");

	//กรณีมี Error เกิดขึ้น
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	   $my_id = $_GET['id'];
	//เรียกข้อมูลจาก ตาราง chart 
	$get_data = $mysqli->query("SELECT DISTINCT SUM(leaves.times_leaves) AS times_leaves,(student.fullname) AS fullname, SUM(add_behavior.status) AS status,(behavior.detail) AS detail   FROM student
 LEFT JOIN leaves ON student.id_std = leaves.id_std
LEFT JOIN add_behavior ON student.id_std = add_behavior.id_std
LEFT JOIN behavior ON behavior.id_behavior = add_behavior.id_behavior

     WHERE leaves.id_std= '$my_id' 
     GROUP BY (student.id_std) ");
	
	while($data = $get_data->fetch_assoc()){
		
		$result[] = $data;
	}
		
	echo $json = json_encode( $result, JSON_NUMERIC_CHECK);
?>