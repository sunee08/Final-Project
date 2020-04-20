<?php
session_start();
$technicain = $_SESSION['id'];
include('../db/connect.php');

$id = $_GET['id'];

$sql = "UPDATE infor_inform SET techID = '$technicain', status='checked' WHERE id = '$id'";

if($con->query($sql)){
	$con->close();
		header("Location:tech_approve.php");

}else{
	echo $con->error;
	$con->close();
}

?>