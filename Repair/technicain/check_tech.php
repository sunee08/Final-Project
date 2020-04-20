<?php
include('../db/connect.php');

$techUsername=$_POST['techUsername'];
$techPassword=$_POST['techPassword'];
$techName=$_POST['techName'];
$techStatus=$_POST['techStatus'];
$techPhone=$_POST['techPhone'];
$techEmail=$_POST['techEmail'];
$techAddress=$_POST['techAddress'];
$techAddress=$_POST['techAddress'];



$sql="INSERT INTO technicain (techUsername,techPassword,techName,techStatus,techPhone,techEmail,techAddress)
		VALUES ('$techUsername','$techPassword','$techName','$techStatus','$techPhone','$techEmail','$techAddress')";



 
if(mysqli_query($con,$sql)){
	
		 echo "<script>alert('You are member Now, Please Login!' )</script>";

				echo "<script>window.open('login.php','_self')</script>";
	}
	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>