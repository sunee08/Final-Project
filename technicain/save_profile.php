<?php

if(empty($submit))
{

require '../db/connect.php';


$techID=$_POST['techID'];
$techUsername=$_POST['techUsername'];
$techName=$_POST['techName'];
$techEmail=$_POST['techEmail'];
$techAddress=$_POST['techAddress'];
$techPhone=$_POST['techPhone'];


$sql = "UPDATE  technicain SET techID = '$techID', techUsername = '$techUsername',techName  = '$techName',
techEmail = '$techEmail',techAddress = '$techAddress' ,techPhone = '$techPhone' 


WHERE techID = '$techID'";

 
if(mysql_query($sql)){
	
    echo "<script>window.open('profile.php','_self')</script>";
}
else{
echo "<script>alert('fail')</script>";
echo "<script>window.open('','_self')</script>";

}
}
?>