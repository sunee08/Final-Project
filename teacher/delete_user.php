<?php
include('../connect/connection.php');
if (isset($_GET['del'])) {
	$id_teacher = $_GET['del'];
	mysqli_query($db, "DELETE FROM teacher WHERE id_teacher=$id_teacher");
	$_SESSION['message'] = "ลบ!"; 
	echo "<script>alert('ลบข้อมูลสำเร็จ');window.history.back();</script>";
}
?>