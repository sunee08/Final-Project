<?php
include('db.php');
$data[] = array('Employee','Markes');


 $my_id = $_GET['id'];


    $sql = "SELECT behavior.*,behavior.topic,behavior.percent,behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior,add_behavior.detail_penalty,add_behavior.id_add_behavior,behavior.id_behavior,add_behavior.id_behavior,add_behavior.detail_penalty,add_behavior.penalty FROM behavior

 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
  LEFT JOIN student ON add_behavior.id_std = student.id_std

     WHERE add_behavior.id_std = '$my_id'
 ";

$query = mysql_query($sql);
while($result = mysql_fetch_array($query))
{
$data[] = array($result['topic'],(int)$result['id_add_behavior']);
  
}




//	$data = array($data);			
echo json_encode($data);
?>
