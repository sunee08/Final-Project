<?php
	//ตั้งค่าการเชื่อมต่อฐานข้อมูล
	$database_host 			= 'localhost';
	$database_username 		= 'root';
	$database_password 		= '';
	$database_name 			= 'rws_manage_std';

	$mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);
//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
	$mysqli->set_charset("utf8");

//กรณีมี Error เกิดขึ้น
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
		//เรียกข้อมูลจาก ตาราง chart 
		$get_data = $mysqli->query("SELECT DISTINCT add_behavior.date_time, SUM(behavior.status) AS status, DATE_FORMAT(add_behavior.date_time, '%M') AS date_time FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
 LEFT JOIN student ON student.id_std = add_behavior.id_std
     WHERE add_behavior.id_std 
     GROUP BY DATE_FORMAT(add_behavior.date_time, '%M%')  ");
		

$get_data1 = $mysqli->query(" SELECT  SUM(leaves.times_leaves) AS times_leaves, DATE_FORMAT(leaves.date_time, '%M') AS date_time  FROM leaves 
 LEFT JOIN student ON student.id_std = leaves.id_std
  WHERE leaves.id_std 
     GROUP BY DATE_FORMAT(leaves.date_time, '%M%') 

 ");


		while($data = $get_data->fetch_assoc()){
			
			$result[] = $data;
		}

			while($data1 = $get_data1->fetch_assoc()){
			
				$result1[] = $data1;
		}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>การใช้งาน Highcharts JS With PHP MySQL</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world! ข้อมูลทดสอบ</h1>

		<div id="container" style="min-width: 100px; height: 400px; margin: 0 auto"></div>
		
		<table class="table" id="datatable">
			<thead>
				<tr>
					<th></th>
					<th>พฤติกรรม </th>
					<th>ใบลา</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($result as $result_tb){
				foreach($result1 as $result_tb1){
						echo"<tr> ";
							echo "<td>".$result_tb['date_time']."</td>";
							echo "<td>".$result_tb['status']."</td>";

							echo "<td>".$result_tb1['times_leaves']."</td>";

							
						echo"</tr>";
					}
					}
									
				?>
			
			</tbody>
		</table>

		
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	
	<script>
	
	$(function () {
				
		$('#container').highcharts({
			data: {
				//กำหนดให้ ตรงกับ id ของ table ที่จะแสดงข้อมูล
				table: 'datatable' 
			},
			chart: {
				type: 'column'
			},
			title: {
				text: 'ข้อมูลจำนวนประชากรของแต่ละจังหวัด'
			},
			yAxis: {
				allowDecimals: false,
				title: {
					text: 'Units'
				}
			},
			
			tooltip: {
				formatter: function () {
					return '<b>' + this.series.name + '</b><br/>' +
						this.point.y; + ' ' + this.point.name.toLowerCase();
				}
			}
		});
	});
	
	</script>
	
  </body>
</html>






