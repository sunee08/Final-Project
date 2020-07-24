<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <?php
include('../connect/connection.php');
    $strSQL="SELECT DISTINCT SUM(leaves.times_leaves) AS times_leaves,(student.fullname) AS fullname  FROM student
 LEFT JOIN leaves ON student.id_std = leaves.id_std
     WHERE leaves.id_std
     GROUP BY (student.id_std)  ";   
    mysql_query("set NAMES tis620"); 
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
    $vn = $objResult["Money"];
    ?>
    <script type="text/javascript">
      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'ฝาก', 'ถอน', 'โอน'],
          ['มกราคม',  <?=$vn?>,      938,         522],
          ['กุมภาพันธ์',  135,      1120,        599],
          ['มีนาคม',  157,      1167,        587],
          ['เมษายน',  139,      1110,        615],
          ['พฤษภาคม',  136,      691,         629]
        ]);

        var options = {
          title : 'สถิติประจำปี พ.ศ. 2557',
          vAxis: {title: "Cups"},
          hAxis: {title: "เดือน"},
          seriesType: "bars",
          series: {5: {type: "line"}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
