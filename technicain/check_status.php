<?php
session_start();

if(empty($submit))
{


require '../db/connect.php';

$id=$_POST['id'];
$status=$_POST['status'];

$sql = "UPDATE  infor_inform  SET status = '$status', id = '$id' 
                                             WHERE  id = '$id' ";

// 
if(mysql_query($sql)){
	
    echo "<script>window.open('infor_approval.php','_self')</script>";
}
else{
echo "<script>alert('fail')</script>";
echo "<script>window.open('','_self')</script>";

}
}
?>