<?php
function status_01_file_1($status)
{
        require '../connect/connection.php';
 $my_id = $_GET['id'];


$strSQL = "SELECT behavior.*,behavior.topic,behavior.percent,behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior,add_behavior.detail_penalty FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
     WHERE add_behavior.id_std = '$my_id'  ";

if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
  


    if ($status == '3') {
        return "<img src='../dist/img/smie.gif' width=40 height=30  >";
    } else if ($status == '4') {
   return "<img src='../dist/img/smie.gif'  width=40 height=30 >";
       } else if ($status == '5') {
   return "<img src='../dist/img/sad.gif' width=40 height=40 >";
       }  else if ($status == '7') {
             return "<img src='../dist/img/angry.gif' width=40 height=40>";

    }
}

}

}


function status_01_file_2($status)
{
       
          require '../connect/connection.php';
 $my_id = $_GET['id'];
  $query = "SELECT behavior.*, SUM(percent) AS total, behavior.topic,behavior.percent, behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
     WHERE add_behavior.id_std = '$my_id' ";

                    $query_result=mysqli_query($db,$query);
                     while ($row=mysqli_fetch_assoc($query_result)) {
                      $sum= $row['total'];
                     }


    if ($status <= '10') {
        return "<img src='../dist/img/smie.gif' width=110 height=100  >";
    } else if ($status <= '18') {
   return "<img src='../dist/img/sad.gif'  width=110 height=100  >";
       } else if ($status <= '20') {
             return "<img src='../dist/img/angry.gif' width=110 height=100 >";
       }  




}
?>
