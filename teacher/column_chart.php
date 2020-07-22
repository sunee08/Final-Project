<?php
include('db.php');
$data[] = array('Employee','Markes');


    $my_id = $_GET['id'];


  $sql = "SELECT DISTINCT behavior.detail,add_behavior.id_behavior FROM add_behavior 
 LEFT JOIN behavior ON add_behavior.id_behavior = behavior.id_behavior
  LEFT JOIN student ON student.id_std = add_behavior.id_std


     WHERE add_behavior.id_std = '$my_id'";

$query = mysql_query($sql);
while($result = mysql_fetch_array($query))
{
$data[] = array($result['detail'],(int)$result['id_behavior']);
  
}




//	$data = array($data);			
echo json_encode($data);

?>
