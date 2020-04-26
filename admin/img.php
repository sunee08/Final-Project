<?php
	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("hwrp");
	$strSQL = "SELECT * FROM customers WHERE cusID ='".$_GET["id"]."'";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objectResult = mysql_fetch_array($objQuery);

	echo $objResult["image"];
?>