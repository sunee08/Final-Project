<?php
session_start();
$admin = $_SESSION['id'];
include('../db/connect.php');

$id = $_GET['id'];

$sql = "UPDATE technicain SET adminID = '$admin' WHERE techID = '$id'";

if($con->query($sql)){
	$con->close();
		header("Location:admin_home.php");

}else{
	echo $con->error;
	$con->close();
}

?>