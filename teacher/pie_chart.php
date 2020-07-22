<?php

include('db.php');

  $sql = "SELECT DISTINCT add_behavior.id_behavior,behavior.detail,behavior.status FROM behavior 
 LEFT JOIN add_behavior ON add_behavior.id_behavior = behavior.id_behavior
     WHERE behavior.id_behavior   
";

$query = mysql_query($sql);
while($result = mysql_fetch_array($query))
{
  $rows[]=array("c"=>array("0"=>array("v"=>$result['detail'],"f"=>NULL),"1"=>array("v"=>(int)$result['id_behavior'],"f" =>NULL)));
  
}

echo $format = '{
"cols":
[
{"id":"","label":"detail","pattern":"","type":"string"},
{"id":"","label":"id_behavior","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';

	

?>








