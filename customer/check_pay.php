<?php
session_start();

include('../db/connect.php');

$status=$_POST['status'];
$cusID=$_POST['cusID'];
$id=$_POST['id'];

$image = $_REQUEST['image']; //รับค่าไฟล์จากฟอร์ม


$_FILES['image']['tmp_name'];
if ($_FILES['image']['name'] != "") {

    copy($_FILES['image']['tmp_name'],
        "payment/" . $_FILES['image']['name']);
    //warnning
}
$image = $_FILES['image']['name'];


$sql="INSERT INTO payment (status,cusID,image,id)
		VALUES ('$status','$cusID','$image','$id')";

                       


 
if(mysql_query($sql)){
	
		 echo "<script>alert('You are member Now, Please Login!' )</script>";

				echo "<script>window.open('payment.php','_self')</script>";
	}
	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>