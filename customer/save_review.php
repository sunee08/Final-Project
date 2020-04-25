<?php
session_start();
include('../db/connect.php');


$detail_review=$_POST['detail_review'];
$cusID=$_POST['cusID'];
$techID=$_POST['techID'];
$c_status=$_POST['c_status'];
$id=$_POST['id'];
$id_re=$_POST['id_re'];


$sql="INSERT INTO  review(detail_review,cusID,techID,c_status,id,id_re)
	VALUES ('$detail_review','$cusID','$techID','$c_status','$id','$id_re')";
	
	
if(mysql_query($sql)){
	
	echo "<script>window.open('review.php','_self')</script>";



	}
	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>