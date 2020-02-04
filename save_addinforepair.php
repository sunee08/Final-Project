

<?php
include('connect.php');

$equipment=$_POST['equipment'];
$damage=$_POST['damage'];
$date=$_POST['date'];
$UsersID=$_POST['UsersID'];
$time=$_POST['time'];



$sql="INSERT INTO infor_repairing (equipment,damage,date, UsersID,time)
		VALUES ('$equipment','$damage','$date','$UsersID','$time')";




 
if(mysqli_query($con,$sql)){
	
		 echo "<script>alert('Save done!' )</script>";
				echo "<script>window.open('repair_reporting.php','_self')</script>";

	}

	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>