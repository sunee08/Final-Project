<?php
include('db.php');
$data[] = array('Employee','Markes');




  $sql = "SELECT DISTINCT add_behavior.id_behavior,behavior.detail,add_behavior.status FROM behavior 
 LEFT JOIN add_behavior ON add_behavior.id_behavior = behavior.id_behavior
     WHERE behavior.id_behavior   
";

$query = mysql_query($sql);
while($result = mysql_fetch_array($query))
{
$data[] = array($result['detail'],(int)$result['id_behavior']);
  
}




//	$data = array($data);			
echo json_encode($data);

?>
