<?php
session_start();

include('../db/connect.php');

$status=$_POST['status'];
$cusID=$_POST['cusID'];
$id=$_POST['id'];
$id_re=$_POST['id_re'];
$image = $_REQUEST['image']; //รับค่าไฟล์จากฟอร์ม


$_FILES['image']['tmp_name'];
if ($_FILES['image']['name'] != "") {

    copy($_FILES['image']['tmp_name'],
        "payment/" . $_FILES['image']['name']);
    //warnning
}
$image = $_FILES['image']['name'];


$sql="INSERT INTO payment (status,cusID,image,id,id_re)
		VALUES ('$status','$cusID','$image','$id','$id_re')";

                       


 
if(mysql_query($sql)){
	
		 echo "<script>alert('อัพโหลดสลิปเรียบร้อย' )</script>";

				echo "<script>window.open('review.php','_self')</script>";

		


	}
	else{
	 echo "<script>alert('MAY YOUR Email Or ID are USED Please! Try Again')</script>";
	  echo "<script>window.open('','_self')</script>";
	 
	}

?>