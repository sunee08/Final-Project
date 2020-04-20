<html>
<body>
        <?php

            error_reporting(E_ALL ^ E_WARNING); 
            error_reporting(0);
             
            
            $cusID = $_POST['cusID'];
    

        $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
        $objDB = mysql_select_db("hwrp");
        $strSQL = "UPDATE customers SET ";
        $strSQL .="cusID = '".$_POST["txtCustomerID"]."' ";
        $strSQL .=",cusUsername = '".$_POST["txtUsername"]."' ";
        $strSQL .=",cusName = '".$_POST["txtName"]."' ";
        $strSQL .=",cusemail = '".$_POST["txtEmail"]."' ";
        $strSQL .=",cusaddress = '".$_POST["txtAddress"]."' ";
        $strSQL .=",cusphone = '".$_POST["txtPhone"]."' ";
       
       
       
$strSQL .="WHERE customers = '".$_GET["cusID"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
    echo "<script>alert('ข้อมูลลูกค้าได้บันทึกเรียบร้อย' )</script>";
	echo "<script>window.open('../admin_infocus.php','_self')</script>";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>
