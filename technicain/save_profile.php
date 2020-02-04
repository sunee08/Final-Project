<html>
<body>
        <?php

            error_reporting(E_ALL ^ E_WARNING); 
            error_reporting(0);
             
            
            $techID = $_POST['techID'];
    

        $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
        $objDB = mysql_select_db("hwrp");
        $strSQL = "UPDATE technicain SET ";
        $strSQL .="techID = '".$_POST["techID"]."' ";
        $strSQL .=",techName = '".$_POST["techName"]."' ";
        $strSQL .=",techUsename = '".$_POST["techUsename"]."' ";
        $strSQL .=",techEmail = '".$_POST["techEmail"]."' ";
        $strSQL .=",techAddress = '".$_POST["techAddress"]."' ";
        $strSQL .=",techPhone = '".$_POST["techPhone"]."' ";
        $strSQL .=",techPassword = '".$_POST["techPassword"]."' ";
        $strSQL .=",tech_Types = '".$_POST["tech_Types"]."' ";
       
       
$strSQL .="WHERE technicain = '".$_GET["techID"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
    echo "<script>alert('ข้อมูลลูกค้าได้บันทึกเรียบร้อย' )</script>";
	echo "<script>window.open('../profile.php','_self')</script>";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>
