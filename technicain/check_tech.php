<?php
include('../db/connect.php');

$techUsername=$_POST['techUsername'];
$techPassword=$_POST['techPassword'];
$techName=$_POST['techName'];
$techPhone=$_POST['techPhone'];
$techEmail=$_POST['techEmail'];
$techAddress=$_POST['techAddress'];
$techStatus=$_POST['techStatus'];
$techTypes=$_POST['techTypes'];



$sql="INSERT INTO technicain (techUsername,techPassword,techName,techStatus,techPhone,techEmail,techAddress,techTypes)
		VALUES ('$techUsername','$techPassword','$techName','$techStatus','$techPhone','$techEmail','$techAddress','$techTypes')";



 
if(mysql_query($sql)){
	
		 echo "<script>alert('Waiting Confirm By Admin!' )</script>";

				echo "<script>window.open('','_self') </script>";
				
	}
	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>