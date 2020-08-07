



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rws_manage_std";

$db = mysqli_connect($servername, $username, $password, $dbname);


	if (mysqli_connect_error())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
		exit();
     }
      mysql_query("SET NAMES UTF8");
?>
