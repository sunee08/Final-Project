
<?php
session_start();
$id_teacher = $_SESSION['id'];
require '../connect/connection.php';

$id = $_GET['id'];
$times_leaves = $_POST['times_leaves'];

$sql = "UPDATE student SET times_leaves = '$times_leaves'  WHERE id_std = '$id'";



if($db->query($sql)){
	$db->close();
	header("Location: leave.php");
}else{
	echo $db->error;
	$db->close();
}

?>