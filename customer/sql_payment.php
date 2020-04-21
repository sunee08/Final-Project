<?php
session_start();
include ("../db/connect.php");

$_FILES['photo_credit']['tmp_name'];
	
	if($_FILES['photo_credit']['name'] != "")
	{
			
			copy($_FILES['photo_credit']['tmp_name'],"../images/".$_FILES['photo_credit']['name']); 
			 //warnning
	}
	$photo_credit = $_FILES['photo_credit']['name'];

	

$sql = "INSERT INTO credit (photo_credit) 
              VALUES( '$photo_credit')";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
     echo "<script>alert('เพิ่มสลิปเรียบร้อยแล้ว');window.location = \"payment.php\";</script>";
     

?>