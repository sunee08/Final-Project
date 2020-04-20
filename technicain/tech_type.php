<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="hwrp";

mysql_connect($hostname, $username, $password)or die("Can't connect DB") ;
mysql_select_db($dbname) or die ("Can't connect DB"); 
mysql_db_query($dbname,"SET NAMES UTF8");

$sql = "SELECT * FROM typestech ORDER BY name_types";
$result = mysql_query($sql) or die (mysql_error());
?>
<select class="form-control" id="name_types" name="name_types" >
	<option value="no">หมวดหมู่</option>
	<?php
	while($row = mysql_fetch_array($result)){
	?>
	<option value="<?php echo $row['name_types']; ?>"><?php echo $row['name_types']; ?></option>
	<?php
	}
	mysql_close();
	?>
</select>