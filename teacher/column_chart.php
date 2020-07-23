<?php
include('db.php');
$data[] = array('Employee','Markes');


    $my_id = $_GET['id'];



$sql = "SELECT DISTINCT SUM(add_behavior.status) AS status,(behavior.detail) AS detail  FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
 LEFT JOIN student ON student.id_std = add_behavior.id_std
     WHERE add_behavior.id_std = '$my_id'
     GROUP BY (add_behavior.id_behavior) ";

$query = mysql_query($sql);
while($result = mysql_fetch_array($query))
{
$data[] = array($result['detail'],(int)$result['status']);
  
}




//	$data = array($data);			
echo json_encode($data);

?>
