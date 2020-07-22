

<?php
$sql = mysql_connect("localhost","root","");
mysql_query("SET NAMES UTF8");

if(!$sql)
{
	echo "Connection Not Created";
}
$con = mysql_select_db("rws_manage_std");
if(!$sql)
{
	echo "Database Not Connected";
}


?>








