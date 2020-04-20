<?php
session_start();
  require '../db/connect.php';
	mysql_connect("localhost","root","");
	mysql_select_db("hwrp");
	
	$Username = $_POST['Username'];
    $Password = $_POST['Password'];

	$strSQL = "SELECT * FROM technicain where techUsername='$Username' and techPassword='$Password' AND adminID != '0'";

	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	
	if(!$objResult)
	{
								header("Location: ../technicain/login.php?error=1");
	}
	
	else
	{
		   
			$_SESSION["id"] = $objResult["techID"];
		    $_SESSION["username"] = $objResult["techUsername"];
			$_SESSION["password"] = $objResult["techPassword"];
			$_SESSION["status"] = $objResult["techStatus"];
			

			session_write_close();
	
			
			if($objResult["techStatus"] == "technician")
			{
				
			
				header("location:tech_home.php");
				exit();
			}
	}
	mysql_close();
	
?>
	

