<?php
$conn=mysql_connect('localhost','root','');//เชื่อมต่อกับฐานข้อมูล
mysql_select_db('db_exshop1');//เลือกฐานข้อมูล
mysql_query('SET NAMES UTF8');//เซตให้รองรับภาษาไทย
//ตัวแปร $month เอาไว้เก็บค่าเดือนทั้งหมด เราจะเอาไว้วนลูปแสดงในตารางครับ
$month=array(1=>'มกราคม',2=>'กุมภาพันธ์',3=>'มีนาคม',4=>'เมษายน',5=>'พฤษภาคม',6=>'มิถุนายน',
7=>'กรกฎาคม',8=>'สิงหาคม',9=>'กันยายน',10=>'ตุลาคม',11=>'พฤศจิกายน',12=>'ธันวาคม');


$sql="SELECT
 DATE_FORMAT(tb_order.od_date,'%c') as month,
SUM(tb_orderview.odv_amount * tb_orderview.odb_price) AS totalRevenue
FROM tb_order
Left Join tb_orderview ON tb_order.od_id = tb_orderview.od_id WHERE tb_order.od_status=3 ";


// tb_order.od_status=3  3 หมายถึง จัดส่งสินค้าเรียบร้อยแล้ว ซึ่งหมายถึงกระบวนการสั่งซื้อได้เสร็จสิ้นสมบรูณ์แล้วนั่นเอง
// 1=ยังไม่ชำระเงิน,2=ชำระเงินแล้ว/รอจัดส่ง,3=ชำระเงิน/จัดส่งสินค้าเรียบร้อยแล้ว 

if(!empty($_GET['year'])){//หากมีการเลือกปี ให้แสดงยอดขายของเดือนที่อยู่ในปีนั้นๆ
    $getYear=$_GET['year'];
 $sql.=" AND YEAR(tb_order.od_date)='".$getYear."'";
}else{//หากไม่เลือกอะไร ให้แสดงยอดขายในปีปัจจุบัน
    $getYear=date('Y');
 $sql.=" AND YEAR(tb_order.od_date)='".$getYear."'";
}

$sql.=" GROUP BY YEAR(tb_order.od_date), MONTH(tb_order.od_date) ORDER BY DATE_FORMAT(tb_order.od_date,'%m') ASC ";

//ผลลัพธ์ที่ได้จะเป็น  เดือนที่กับรายได้รวมของเดือน เช่น 1 | 1000 หมายถีงรายได้รวมของเดือนที่ 1 คือ 1,000 บาท
$rs_report=mysql_query($sql) or die(mysql_error());
$chart="['ประจำเดือน','รายได้']";
while($show_report=mysql_fetch_assoc($rs_report))
  
{//ดึงข้อมูลที่ได้จากฐานข้อมูลมาเก็บไว้ในตัวแปรแบบอาเรย์ ($report_arr)
     $report_arr[$show_report['month']]=$show_report['totalRevenue'];
}
foreach($month as $key_m => $val_m){
 $chart.=",['".$val_m."',".($report_arr[$key_m]*1)."]";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สรุปยอดขายประจำเดือน</title>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([<?=$chart?>]);
        var options = {
          title: 'สรุปยอดขายประจำเดือน',
     vAxis: {title: "Revenue"},
            hAxis: {title: "Month"},
   isStacked: true,
    'legend': 'none',
        }
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_show'));
        chart.draw(data, options);
      }
    </script>
<style type="text/css">
body{
font-size:13px;
font-family:Tahoma, Geneva, sans-serif; 
color:#333;
}
</style>
</head>
 
<body>
    <div align="center"><h3>รายงานสรปยอดขายประจำเดือน<br /><br />
</h3></div>
<div align="center">
      <form id="form1" name="form1" method="get" action="">
        <label for="month"></label>
        เลือกปี 
        <select name="year" id="year">
        <?php for($year=2010;$year<=date('Y');$year++){?>
        <option value="<?=$year?>" <?=$getYear==$year?'selected':'' ?>><?=($year+543)?></option>
        <?php  }?>
        </select>
        <input type="submit" name="btsearch" id="btsearch" value="ค้นหารายงาน" />
  </form>
    </div>    
    <table width="100%" border="0">
      <tr>
        <td align="center"><div id="chart_show" style="width:750px;height:500px;" ></div></td>
      </tr>
      <tr>
        <td><table width="450" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td width="426" align="center" bgcolor="#91C6D5"><strong>เดือน</strong></td>
    <td width="214" align="center" bgcolor="#91C6D5"><strong>ยอดขาย</strong></td>
  </tr>
  <?php  
  $totalRevenue=0;
  foreach($month as $key_m => $val_m){
   $totalRevenue+=$report_arr[$key_m];
  ?>
  <tr>
    <td align="center" bgcolor="#E8E8E8"><?=$val_m?></td>
    <td align="center" bgcolor="#E8E8E8"><?=number_format(($report_arr[$key_m]),2,'.',',')?></td>
  </tr>
  <?php } ?>
  <tr>
    <td align="right"><strong>รายได้รวมทั้งหมด</strong></td><td align="center"><b><?=number_format($totalRevenue,2,'.',',')?></b></td></tr>
</table></td>
      </tr>
    </table>
</body>
</html>
<?php  mysql_close($conn);?>