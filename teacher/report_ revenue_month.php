<html>
<head>
    <meta charset="utf-8">
    <title>รายงานในแบบกราฟ by devbanban.com</title>
</head>
<?php
$con= mysqli_connect("localhost","root","","rws_manage_std") or die("Error: " . mysqli_error($con));

mysqli_query($con, "SET NAMES 'utf8' ");
 
$query = "
SELECT SUM(percent) AS percent, DATE_FORMAT(date_time, '%Y') AS date_time
FROM behavior 
GROUP BY DATE_FORMAT(date_time, '%Y%')
";


  $query = "SELECT behavior.*, SUM(percent) AS total, behavior.percent,add_behavior.id_std,add_behavior.id_behavior,behavior.id_behavior,add_behavior.id_behavior FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
     WHERE add_behavior.id_std = '$my_id' ";


$result = mysqli_query($con, $query);
$resultchart = mysqli_query($con, $query);  


 //for chart
$date_time = array();
$percent = array();

while($rs = mysqli_fetch_array($resultchart)){ 
  $date_time[] = "\"".$rs['date_time']."\""; 
  $percent[] = "\"".$rs['percent']."\""; 
}
$date_time = implode(",", $date_time); 
$percent = implode(",", $percent); 
 
?>

<h3 align="center">รายงานในแบบกราฟ by devbanban.com</h3>
<table width="200" border="1" cellpadding="0"  cellspacing="0" align="center">
  <thead>
  <tr>
    <th width="10%">ปี</th>
    <th width="10%">ยอดขาย</th>
  </tr>
  </thead>
  
  <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td align="center"><?php echo $row['date_time'];?></td>
      <td align="right"><?php echo number_format($row['percent'],2);?></td> 
    </tr>
    <?php } ?>

</table>
<?php mysqli_close($con);?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
<hr>
<p align="center">

 <!--devbanban.com-->

<canvas id="myChart" width="800px" height="300px"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $date_time;?>
    
        ],
        datasets: [{
            label: 'รายงานภาพรวม แยกตามปี (บาท)',
            data: [<?php echo $percent;?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>  
</p> 
  <!--devbanban.com-->
</html>