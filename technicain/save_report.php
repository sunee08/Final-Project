<?php

require '../db/connect.php';


$detail_re=$_POST['detail_re'];
$price_re=$_POST['price_re'];
$cusID=$_POST['cusID'];
$techID=$_POST['techID'];
$id=$_POST['id'];
$status_tech=$_POST['status_tech'];

$sql="INSERT INTO report_tech(detail_re,price_re,cusID,techID,id,status_tech)
		
	VALUES ('$detail_re','$price_re','$cusID','$techID','$id','$status_tech')";


if(mysql_query($sql)){
                    
	echo "<script>window.open('infor_approval_view.php','_self')</script>";
	}
	else{
	echo "<script>alert('fail')</script>";
	echo "<script>window.open('smwork.php','_self')</script>";
	}
	
?>