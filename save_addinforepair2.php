
<head>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);	

$objConnect = @mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("housewares_repairing");
$strSQL = "INSERT INTO infor_repairing ";
$strSQL .="(name,equipment,damage,status,teachnician) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["txtName"]."','".$_POST["txtEquipment"]."','".$_POST["txtDamage"]."' ";
$strSQL .=",'".$_POST["txtStatus"]."','".$_POST["txtTeachnician"]."' ";
$strSQL .="WHERE CustomerID = '".$_GET["CusID"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	header("location:home_technician.php");
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>
