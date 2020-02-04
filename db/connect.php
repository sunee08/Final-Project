
<?php
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "hwrp";

$con = mysqli_connect($servername,$username,$password,$dbname);



if($con->connect_error){
	die("Connection failed: ".$db->connect_error);
}





?>
