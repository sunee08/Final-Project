<?php
include('../db/connect.php');

$equipment=$_POST['equipment'];
$descrip=$_POST['descrip'];
$hdate=$_POST['hdate'];
$cusID=$_POST['cusID'];
$ntime=$_POST['ntime'];



$sql="INSERT INTO  infor_inform (equipment,descrip,hdate, cusID,ntime)
		VALUES ('$equipment','$descrip','$hdate','$cusID','$ntime')";




 
if(mysqli_query($con,$sql)){
	
		 echo "<script>alert('Save done!' )</script>";
				echo "<script>window.open('inform_repair.php','_self')</script>";

	}

	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>