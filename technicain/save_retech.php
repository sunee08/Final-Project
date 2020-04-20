<?php
include('../db/connect.php');

$date_re=$_POST['date_re'];
$detail_re=$_POST['detail_re'];
$price_re=$_POST['price_re'];
$Status_re=$_POST['Status_re'];
$cusID=$_POST['cusID'];




$sql="INSERT INTO report_tech (date_re,detail_re,price_re,Status_re,cusID)
		VALUES ('$date_re','$detail_re','$price_re','$Status_re','$cusID')";



 
if(mysqli_query($con,$sql)){
	
		 echo "<script>alert('You are member Now, Please Login!' )</script>";

				echo "<script>window.open('login.php','_self')</script>";
	}
	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>