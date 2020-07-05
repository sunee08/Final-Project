<?php
require '../connect/connection.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rws_manage_std";

$db = mysqli_connect($servername, $username, $password, $dbname);
$db->set_charset("utf8");

if (!$db) {
    die("Connetion failed:" . mysqli_connect_error('Could not connected to the DB'));
}

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$status = $_POST['status'];
$id_admin = $_POST['id_admin'];

$sql = "INSERT INTO teacher(fullname,username,password,gender,tel,email,status,id_admin)values('$fullname','$username','$password','$gender','$tel','$email','$status','$id_admin')";

if ($rs = $db->query($sql)) {
    $db->close();
    header("Location: accept_user.php?success=1");
} else {
    echo $db->error;
    $db->close();

    echo "<script>alert('MAY YOUR Email Or ID are USED! Please! Try Again')</script>";
    echo "<script>window.open('register.php','_self')</script>";
}
