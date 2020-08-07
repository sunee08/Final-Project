
<?php
session_start();
$id_teacher = $_SESSION['id'];
require '../connect/connection.php';

$id = $_GET['id'];
$times_leaves = $_POST['times_leaves'];
$id_teacher  = $_POST['id_teacher'];



$sql = "UPDATE student SET times_leaves = '$times_leaves', id_teacher='$id_teacher' WHERE id_std = '$id'";



if($db->query($sql)){
	$db->close();
        echo "<script>alert('สำเร็จ');window.location = \"leave.php\";</script>";

}else{
	echo $db->error;
	$db->close();
}

?>