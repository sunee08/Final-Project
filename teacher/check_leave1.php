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
$times_leaves = $_POST['times_leaves'];
$id_std = $_POST['id_std'];
$date_time = $_POST['date_time'];



$sql = "INSERT INTO leaves(times_leaves,id_teacher,id_std,date_time)values('$times_leaves','$id_teacher','$id_std','$date_time')";

if ($rs = $db->query($sql)) {
    $db->close();
    header("Location: result_leaves.php?success=1");
} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('Try Again')</script>";
    echo "<script>window.open('test.php','_self')</script>";
}
