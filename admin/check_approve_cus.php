<?php
session_start();
$admin = $_SESSION['id'];
include('../db/connect.php');

$id = $_GET['id'];

$sql = "UPDATE customers SET adminID = '$admin' WHERE cusID = '$id'";

if($con->query($sql)){
	$con->close();
		header("Location:admin_approve.php");

}else{
	echo $con->error;
	$con->close();
}

?>