
<?php
session_start();
$id_teacher = $_SESSION['id'];
require '../connect/connection.php';

$id = $_GET['id'];
$percents = $_POST['percents'];
$id_teacher  = $_POST['id_teacher'];
$id_behavior = $_POST['id_behavior'];



$sql = "UPDATE add_behavior SET percents = '$percents', id_teacher='$id_teacher',id_behavior='$id_behavior' WHERE id_std= '$id'";



if($db->query($sql)){
	$db->close();
        echo "<script>alert('สำเร็จ');window.location = \"show.php\";</script>";

}else{
	echo $db->error;
	$db->close();
}

?>