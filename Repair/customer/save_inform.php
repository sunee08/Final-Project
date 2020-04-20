<?php
include('../db/connect.php');

$equipment=$_POST['equipment'];
$descrip=$_POST['descrip'];
$hdate=$_POST['hdate'];
$cusID=$_POST['cusID'];
$techID=$_POST['techID'];
$ntime=$_POST['ntime'];
$types=$_POST['types'];



$sql="INSERT INTO  infor_inform (equipment,descrip,hdate,techID, cusID,ntime,types)
		VALUES ('$equipment','$descrip','$hdate','$techID','$cusID','$ntime','$types')";




 
if(mysqli_query($con,$sql)){
	
		 echo "<script>alert('Save done!' )</script>";
				echo "<script>window.open('inform_repair.php','_self')</script>";

	}

	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>