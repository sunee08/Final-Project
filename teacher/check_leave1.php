<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rws_manage_std";

$db = mysqli_connect($severname,$username,$password,$dbname);

if(!$db){
	die("Connetion failed:".mysqli_connect_error('Could not connected to the DB'));
}

$id_teacher = $_POST['id_teacher'];
$times = $_POST['times'];
$id_std = $_POST['id_std'];



$sql = "INSERT INTO leaves(times,id_teacher,id_std)values('$times','$id_teacher','$id_std')";

if ($rs = $db->query($sql)) {
    $db->close();
    header("Location: test.php?success=1");
} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('Try Again')</script>";
    echo "<script>window.open('test.php','_self')</script>";
}
