

      <?php
session_start();
include('../connect/connection.php');

if($_SESSION['id']==""){

echo "Please Login!";
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
        


        <li >
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
  
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                                 <?php
$con = mysqli_connect('localhost', 'root', '', 'rws_manage_std');
$con->set_charset("utf8");
$query = "SELECT id_std
                        FROM student
                        WHERE types ='มัธยมต้น'
                        ORDER BY id_std";
$query_num = mysqli_query($con, $query);
$row = mysqli_num_rows($query_num);
echo '<h3>' . $row . '</h3>';
echo ' <p> นักเรียนชั้นมัธยมต้น  </p>';
?>

            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                <?php
$con = mysqli_connect('localhost', 'root', '', 'rws_manage_std');
$con->set_charset("utf8");
$query = "SELECT id_std
                        FROM student
                        WHERE types ='มัธยมปลาย'
                        ORDER BY id_std";
$query_num = mysqli_query($con, $query);
$row = mysqli_num_rows($query_num);
echo '<h3>' . $row . '</h3>';
echo ' <p> นักเรียนชั้นมัธยมปลาย  </p>';
?>

            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                      <?php
$con = mysqli_connect('localhost', 'root', '', 'rws_manage_std');
$con->set_charset("utf8");
$query = "SELECT id_teacher FROM teacher ORDER BY id_teacher";
$query_num = mysqli_query($con, $query);
$row = mysqli_num_rows($query_num);
echo '<h3>' . $row . '</h3>';
echo ' <p> คุณครู  </p>';
?>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-"></i></a>
          </div>
        </div>
        <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
                      <?php
$con = mysqli_connect('localhost', 'root', '', 'rws_manage_std');
$con->set_charset("utf8");


$query = "SELECT id_std FROM leaves
                        WHERE times_leaves
                        ORDER BY id_std";


$query_num = mysqli_query($con, $query);
$row = mysqli_num_rows($query_num);
echo '<h3>' . $row . '</h3>';
echo ' <p> ใบลา  </p>';
?>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-"></i></a>
          </div>
        </div>

      </div>
      <!-- /.row -->
      <!-- Main row -->
      <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
             <h3 class="box-title">สถิติของผิดกฏระเบียบแต่ละเดือน</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
             <div class="card-body">
                <h3 align="center"></h3>
            

   <?php

              $con= mysqli_connect("localhost","root","","rws_manage_std") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

            $query = "     
        SELECT SUM(behavior.percent) AS percent, DATE_FORMAT(add_behavior.date_time, '%M') AS date_time FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
 LEFT JOIN student ON student.id_std = add_behavior.id_std
     WHERE add_behavior.id_std
     GROUP BY DATE_FORMAT(add_behavior.date_time, '%M%')DESC

            ";
            $result = mysqli_query($con, $query);
            $resultchart = mysqli_query($con, $query);
            //for chart
            $date_time = array();
            $percent = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $date_time[] = "\"".$rs['date_time']."\"";
            $percent[] = "\"".number_format($rs['percent'])."\"";
            }
            $date_time = implode(",", $date_time);
            $percent = implode(",", $percent);
            
            ?>
                    

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
     
            <p align="center">
                <!--devbanban.com-->
                <canvas id="myChart" width="800px" height="400px"></canvas>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: [<?php echo $date_time;?>
                
                ],
                datasets: [{
                label: 'รายงานรายได้ แยกตามเดือน ',
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



                         

      
      <!-- /.content -->
</div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->



          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">สถิติของการซื้อใบลา</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
          <div class="card-body">
                <h3 align="center"></h3>
            

   <?php

              $con= mysqli_connect("localhost","root","","rws_manage_std") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

            $query = "     
        SELECT SUM(leaves.times_leaves) AS times_leaves, DATE_FORMAT(leaves.date_time, '%M') AS date_time FROM leaves
 LEFT JOIN student ON student.id_std = leaves.id_std
     WHERE leaves.id_std 
     GROUP BY DATE_FORMAT(leaves.date_time, '%M%')  DESC

            ";
            $result = mysqli_query($con, $query);
            $resultchart = mysqli_query($con, $query);
            //for chart
            $date_time = array();
            $times_leaves = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $date_time[] = "\"".$rs['date_time']."\"";
            $times_leaves[] = "\"".number_format($rs['times_leaves'])."\"";
            }
            $date_time = implode(",", $date_time);
            $times_leaves = implode(",", $times_leaves);
            
            ?>
                    

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
            <p aign="center">
                <!--devbanban.com-->
                <canvas id="myChart3" width="800px" height="400px"></canvas>
                <script>
                var ctx = document.getElementById("myChart3").getContext('2d');
                var myChart3 = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: [<?php echo $date_time;?>
                
                ],
                datasets: [{
                label: 'รายงานรายได้ แยกตามเดือน ',
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


            
                         

      
      <!-- /.content -->
</div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
         <div class="col-md-6">
          <!-- AREA CHART -->
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
             <h3 class="box-title">รายการผิดกฏระเบียบ</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
             <div class="card-body">
                <h3 align="center"></h3>


   <?php

              $con= mysqli_connect("localhost","root","","rws_manage_std") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

            $query = "     
        SELECT DISTINCT SUM(add_behavior.status) AS status,(behavior.detail) AS detail  FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
 LEFT JOIN student ON student.id_std = add_behavior.id_std
     WHERE add_behavior.id_std
     GROUP BY (add_behavior.id_behavior) DESC

            ";
            $result = mysqli_query($con, $query);
            $resultchart = mysqli_query($con, $query);
            //for chart
            $detail = array();
            $status = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $detail[] = "\"".$rs['detail']."\"";
            $status[] = "\"".$rs['status']."\"";
            }
            $detail = implode(",", $detail);
            $status = implode(",", $status);
            
            ?>
                    

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>

            <p align="center">
                <!--devbanban.com-->
                <canvas id="myChart1" width="800px" height="400px"></canvas>
                <script>
                var ctx = document.getElementById("myChart1").getContext('2d');
                var myChart1 = new Chart(ctx, {
                type: 'polarArea',
                data: {
                labels: [<?php echo $detail;?>
                
                ],
                datasets: [{
                label: 'รายงานรายได้ แยกตามวัน',
                data: [<?php echo $status;?>
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



                         

      
      <!-- /.content -->
</div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
   

        
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
<script src="../bower_components/chart.js/Chart.js"></script>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
