<?php
session_start();
$technicain = $_SESSION['id'];
include('../db/connect.php');

$id = $_GET['id'];

$strSQL = "UPDATE infor_inform SET techID = '$technicain' , status='กำลังดำเนินการ' WHERE id = '$id'  ";

if(mysql_query($strSQL)){
	
	echo "<script>alert('Confirm By Technicain!' )</script>";

		   echo "<script>window.open('infor_approval.php','_self') </script>";
		   
}
else{
echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
 echo "<script>window.open('tech_approve.php','_self')</script>";

}
?>