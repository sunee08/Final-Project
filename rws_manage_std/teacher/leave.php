

      <?php
session_start();
include('../connect/connection.php');

if($_SESSION['id']==""){

        echo "<script>alert('กรุณาล๊อกอินเพื่อเข้าสู่ระบบ');window.location = \"../index.php\";</script>";
exit(); 
} 
/*if($_SESSION['status']!="Staff")
{
echo "Welcome staff!";
exit();
}*/






  mysql_connect($servername, $username, $password)or die("Can't connect DB") ;
mysql_select_db($dbname) or die ("Can't connect DB"); 
mysql_db_query($dbname,"SET NAMES UTF8");

  $strSQL = "SELECT * FROM teacher WHERE id_teacher = '".$_SESSION['id']."' ";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);

  
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ระบบจัดการพฤติกรรม</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
 <li class="nav-item d-none d-sm-inline-block">
          <a href="../auth/logout.php" class="nav-link">ออกจากระบบ</a>
        </li>

          <li class="dropdown messages-menu">
           
          
     
                  <!-- end task item -->
    
                  <!-- end task item -->
              
          <!-- User Account: style can be found in dropdown.less -->
     
              <!-- Menu Body -->
          
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2.jpg"  class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $objResult['fullname']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $objResult['status']; ?></a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">เมนู</li>
       
       

   <li>
             <a href="add_user.php">
            <i class="fa fa-users"></i>
            <span>การจัดการผู้ที่มีสิทธิเข้าใช้งาน</span>
          </a>
        </li>

         <li >
        <a href="add_student.php">
            <i class="fa fa-user-plus"></i>
            <span>การจัดการรายชื่อนักเรียน</span>
          </a>
        </li>

          <li>
          <a href="profile.php">
            <i class="fa fa-user-circle"></i>
            <span>ข้อมูลผู้ดูแลระบบ</span>
          </a>
        </li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>รายชื่อนักเรียนทั้งหมด</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> มัธยมต้น
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="../class study/m1_1.php"><i class="fa fa-circle-o"></i> ม.1</a></li>
              <li><a href="../class study/m2_1.php"><i class="fa fa-circle-o"></i> ม.2</a></li>
              <li><a href="../class study/m3_1.php"><i class="fa fa-circle-o"></i> ม.3</a></li>

              </ul>
            </li>
               <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> มัธยมปลาย
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="../class study/m4_1.php"><i class="fa fa-circle-o"></i> ม.4</a></li>
              <li><a href="../class study/m5_1.php"><i class="fa fa-circle-o"></i> ม.5</a></li>
              <li><a href="../class study/m6_1.php"><i class="fa fa-circle-o"></i> ม.6</a></li>
                </li>
              </ul>
            </li>
          </ul>
        </li>

         <!-- 
         <li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>การจัดการพฤติกรรมนักเรียน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="std_behavior1_3.php"><i class="fa fa-circle-o"></i>พฤติกรรมนักเรียนมัธยมต้น</a></li>
            <li class=""><a href="std_behavior4_6.php"><i class="fa fa-circle-o"></i>พฤติกรรมนักเรียนมัธยมปลาย</a></li>
              <li class=""><a href="add_behavior.php"><i class="fa fa-circle-o"></i>เพิ่มพฤติกรรม</a></li>
          </ul>
        </li>


                 end task item -->

     <li>
          <a href="add_behavior.php">
            <i class="fa fa-th"></i> <span>การจัดการพฤติกรรมของนักเรียน</span>
          </a>
        </li>
        

           <li class="active ">
          <a href="leave.php">
            <i class="fa fa-files-o"></i>
            <span>การติดต่อซื้อใบลา</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


    

        <li>
          <a href="result.php">
            <i class="fa fa-dashboard"></i> <span>แสดงผล</span>
          </a>
        </li>

        <li>
          <a href="report.php">
            <i class="fa fa-book"></i>
            <span>รายงาน</span>
          </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
            แสดงผลรายชื่อนักเรียนที่ซื้อใบลา
      </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">การติดต่อซื้อใบลา</li>
      </ol>
    </section>

     <section class="content">
      <div class="row">
      
 
        <div class="col-xs-12">
          <div class="box">
    <!-- Main content -->

          <style>
.table .thead-light th {
  color: #401500;
  background-color: #3c8dbc
;
  border-color: #3c8dbc;
}
</style>
   <div class="modal-footer">

            <a href="result_leaves.php"
                          class="btn btn-success btn-l">
                        เพิ่มนักเรียนซื้อใบลา</a>

              </div>
        <!-- /.modal -->
            <!-- /.box-header -->
          
  <form id="add" name="add" method="post" action="check_leave1.php" enctype="multipart/form-data" onsubmit="return checkForm()"  > 
  <div class="box-body">
    <table id="example1" class="table  table-hover">
          <thead class="thead-light">
                <tr >
             <th style="font-size: 14px; color:white;" width="5%" class="text-left">ลำดับ</th>
              <th style="font-size: 14px; color:white;" width="10%" class="text-left">รหัสนักเรียน</th>
            <th style="font-size: 14px; color:white;" width="20%" class="text-left" >ชื่อ - นามสกุล</th>
              <th style="font-size: 14px; color:white;" width="5%"class="text-left">ห้องเรียน </th>
               <th style="font-size: 14px; color:white;" width="15%" class="text-left">จำนวนใบลาที่ซื้อ</th>
           <th style="font-size: 14px; color:white;" width="15%" class="text-left">การจัดการ</th>
                </tr>
                </thead>
                <tbody>

         <?php
include('../connect/connection.php');




$strSQL = "SELECT DISTINCT SUM(leaves.times_leaves) AS times_leaves,(student.fullname) AS fullname ,student.fullname,student.id_std_card,student.class_room,leaves.id_std FROM student
 LEFT JOIN leaves ON student.id_std = leaves.id_std
     WHERE leaves.id_std
     GROUP BY (student.id_std)  ";


    
      $count = 1;
        ?>


  <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>
         <td class="text-left" style="font-size: 15px;"> <?php echo $count++; ?></td>
         <td class="text-left" style="font-size: 15px;"><?php echo $objResult->id_std_card; ?></td>
         <td class="text-left" style="font-size: 15px;"><?php echo $objResult->fullname; ?></td>
         <td class="text-left" style="font-size: 15px;"><?php echo $objResult->class_room; ?></td> 
         <td class="text-left" style="font-size: 15px;"><?php echo $objResult->times_leaves; ?><font color='blue'>/12</font>
         </td>
      
<td><a href="../teacher/show_leaves.php?id=<?php echo $objResult->id_std; ?>"
                          class="btn btn-warning btn-xs">
                        สถิติการซื้อใบลา</a>

                          <a href="../function/delete_leave.php?id=<?php echo $objResult->id_std; ?>"
                          class="btn btn-danger btn-xs" onclick="return confirm('Are You sure Delete?')">
                        ลบ</a>

</td>
      </tr>

                    <?php
    }
}
?>
            </table>
                   
            </div>
</div>
</div>
</form>
            </div>


            <!-- /.box-body -->
    
          <!-- /.box -->
        <!-- right col -->

      <!-- /.row (main row) -->

    </section>


 
            <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
<html>
<head>
    <meta charset="utf-8">
    <title>รายงานในแบบกราฟ</title>
</head>

<div class="container">
  <div class="row">
    <div class="col-md-12">
     <h3 align="center"></h3>

 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
      <a href="leave.php?p=daily" class="btn btn-info">รายวัน</a> 
      <a href="leave_mon.php?p=monthy" class="btn btn-success">รายเดือน</a> 
      <a href="leave_year.php?p=yearly" class="btn btn-warning">รายปี</a> 
    </div>
  </div>
</div>

  

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <?php

              $con= mysqli_connect("localhost","root","","rws_manage_std") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

            $query = "     
       SELECT SUM(leaves.times_leaves) AS times_leaves, (leaves.date_time) AS date_time FROM leaves
 LEFT JOIN student ON student.id_std = leaves.id_std
     WHERE leaves.id_std 
     GROUP BY (leaves.id_leave) DESC


            ";
            $result = mysqli_query($con, $query);
            $resultchart = mysqli_query($con, $query);
            //for chart
        $date_time = array();
$times_leaves = array();

            while($rs = mysqli_fetch_array($resultchart)){
            $date_time[] = "\"".$rs['date_time']."\"";
            $times_leaves[] = "\"".$rs['times_leaves']."\"";
            }
            $date_time = implode(",", $date_time);
            $times_leaves = implode(",", $times_leaves);
            
            ?>
                        <h3 align="center">รายงานแยกตามวัน</h3>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
            <hr>
            <p align="center">
                <!--devbanban.com-->
                <canvas id="myChart" width="800px" height="200px"></canvas>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: [<?php echo $date_time;?>
                
                ],
                datasets: [{
                label: 'รายงานรายได้ แยกตามวัน (บาท)',
                data: [<?php echo $times_leaves;?>
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



           <div class="box">
    <!-- Main content -->

          <style>
.table .thead-light th {
  color: #401500;
  background-color: #3c8dbc
;
  border-color: #3c8dbc;
}
</style>
  
        <!-- /.modal -->
            <!-- /.box-header -->
          

  <div class="box-body">
    <table id="example2" class="table  table-hover" class="center">
          <thead class="thead-light">
                <tr >
             <th style="font-size: 14px; color:white;" width="5%" class="text-left">ลำดับ</th>
              <th style="font-size: 14px; color:white;" width="15%" class="text-left">ว/ด/ป</th>
                            <th style="font-size: 14px; color:white;" width="15%" class="text-left">เวลา</th>

            <th style="font-size: 14px; color:white;" width="20%" class="text-left" >ชื่อ - นามสกุล</th>
           
       

                </tr>
                </thead>
                <tbody>


 


                 <?php 
          
       $strSQL = "
             SELECT SUM(leaves.times_leaves) AS times_leaves, DATE_FORMAT(leaves.date_time, '%d-%m-%Y') AS date_time,student.fullname,leaves.times FROM leaves
 LEFT JOIN student ON student.id_std = leaves.id_std
     WHERE leaves.id_std 
     GROUP BY (leaves.id_leave) DESC
            ";      
             $count = 1;
               


if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>


         <td class="text-left" style="font-size: 15px;"> <?php echo $count++; ?></td>
         <td class="text-left" style="font-size: 15px;"><?php echo $objResult->date_time; ?></td>
           <td class="text-left" style="font-size: 15px;"><?php echo $objResult->times; ?></td>

           <td class="text-left" style="font-size: 15px;"><?php echo $objResult->fullname; ?></td>

       


           
       
      </tr>
  
                    <?php
    }
}
?>
             </table>
                   
            </div>
</div>
</div>
</form>
            </div>


            <!-- /.box-body -->
    
          <!-- /.box -->
        <!-- right col -->

      <!-- /.row (main row) -->

    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong > <center>Copyright &copy; 2020 <a href="index.php">Student behavior management system</a>.</strong> All rights
    reserved.</center>
  </footer>

 
  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
       $('#example2').DataTable()
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })


$('.tex').keyup(function() {
     var sum = 0;
    $('.tex').each(function() {
        sum += Number($(this).val());
    });
    $('#totals').val(sum);

});

</script>
</body>
</html>