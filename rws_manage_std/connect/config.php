<?php

     $hostname = "localhost";
	$username = "root";
	$password = "";
	$dbName	  = "rws_manage_std";

	$con = mysqli_connect($hostname,$username,$password,$dbName);

	if (mysqli_connect_error())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
		exit();
     }
      mysql_query("SET NAMES UTF8");
?>
