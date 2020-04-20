
<head>
</head>
<body>
        <?php

            error_reporting(E_ALL ^ E_WARNING); 
            error_reporting(0);
             
            
            $infor_id = $_POST['hid'];
    

        $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
        $objDB = mysql_select_db("housewares_repairing");
        $strSQL = "UPDATE infor_repairing SET ";
        $strSQL .=",name = '".$_POST["txtName"]."' ";
        $strSQL .=",equipment = '".$_POST["txtEquipment"]."' ";
        $strSQL .=",damage = '".$_POST["txtDamage"]."' ";
        $strSQL .=",status = '".$_POST["txtStatus"]."' ";
        $strSQL .=",pick_up_Equipment = '".$_POST["txtPickupEquipment"]."' ";
        $strSQL .=",remand = '".$_POST["txtRemand"]."' ";
        $strSQL .=",teachnician = '".$_POST["txtTeachnician"]."' ";
        $strSQL .=",description = '".$_POST["txtDescription"]."' ";
        $strSQL .=",price = '".$_POST["txtPrice"]."' ";
       
$strSQL .="WHERE id_infor = '".$_GET["id_infor"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	header("location:cus_home.php");
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>
