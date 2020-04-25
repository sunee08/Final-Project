<?php
include('../db/connect.php');


$detail_review=$_POST['detail_review'];
$cusID=$_POST['cusID'];
$techID=$_POST['techID'];
$c_status=$_POST['c_status'];


$sql="INSERT INTO  review (detail_review,cusID,techID,c_status)
	VALUES ('$detail_review','$cusID','$techID','$c_status')";
	
	

     if(mysql_query($sql)){
	
     echo "<script>alert('บันทึกเรียบร้อย ขอบคุณที่ใช้บริการค่ะ' )</script>";
	echo "<script>window.open('review.php','_self')</script>";

	}

	else{
	echo "<script>alert('Try Again')</script>";
     echo "<script>window.open('','_self')</script>";
	}

?>