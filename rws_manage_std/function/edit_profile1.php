

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
    <a href="../teacher/index.php" class="logo">
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
             <a href="../teacher/add_user.php">
 <i class="fa fa-users"></i>
            <span>จัดการผู้ที่มีสิทธิเข้าใช้งาน</span>
          </a>
        </li>

         <li >
        <a href="../teacher/add_student.php">
        <i class="fa fa-user-plus"></i>
            <span>เพิ่มข้อมูลนักเรียน</span>
          </a>
        </li>
          <li >
          <a href="../teacher/profile.php">
               <i class="fa fa-user-circle"></i>
            <span>ข้อมูลผู้ดูแลระบบ</span>
          </a>
        </li>
      
      
<li class=" active treeview">
          <a href="#">
          <i class="fa fa-folder"></i>  <span>รายชื่อนักเรียนทั้งหมด</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class=" active treeview">
              <a href="#"><i class="fa fa-circle-o"></i> มัธยมต้น
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                   <li class="active ">
<a href="../class study/m1_1.php"><i class="fa fa-circle-o"></i> ม.1</a></li>
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
          <a href="../teacher/add_behavior.php">
            <i class="fa fa-th"></i>  <span>การจัดการพฤติกรรมของนักเรียน</span>
          </a>
        </li>
        


     
        <li >
          <a href="../teacher/leave.php">
            <i class="fa fa-files-o"></i>
            <span>การติดต่อซื้อใบลา</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


    

        <li>
          <a href="../teacher/result.php">
              <i class="fa fa-dashboard"></i> <span>แสดงผล</span>
          </a>
        </li>

        <li>
          <a href="../teacher/report.php">
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
       แก้ไขประวัตินักเรียน
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">รายชื่อนักเรียนทั้งหมด</li>
          <li class="active">มัธยมต้น</li>

      </ol>
  </section>

  <?php
  $my_id = $_GET['id'];

$strSQL = "SELECT * FROM student WHERE id_std='" . $_GET['id'] . "'";


?>
      <?php
if ($result = $db->query($strSQL)) {
    while ($objectResult = $result->fetch_object()) {
        ?>


    <!-- Main content -->
    <section class="content">

      <div class="row">
     <div class="col-xs-12">

          <!-- Profile Image -->
     <form  class="p-5 bg-white" enctype="multipart/form-data" method="post"
             action="check_edit1.php" >

          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../dist/img/user1.png" alt="User profile picture">

              <h3 class="profile-username text-center">แก้ไขประวัติส่วนตัว</h3>
 
     
        
              <hr>
              <p>
                <h5>1. ประวัติ</h5>
              </p>

              <!-- <a href="booking.php" style="color:red">ค้นหาที่ฝึกงาน</a> -->


 <div class="row form-group">
                <div class="col-md-6 mb-4 mb-md-0">
        <label class="text-black" for="fname">ชื่อ-นามสกุล</label>
<input type="text" name="fullname" class="form-control" value="<?php echo $objectResult->fullname; ?>">

                </div>
                <div class="col-md-6">
                  <label class="text-black" for="name">เลขประจำตัวประชาชน</label>
<input type="text" name="id_card" class="form-control" value="<?php echo $objectResult->id_card; ?>">           </div>


              </div>



              <div class="row form-group">
                <div class="col-md-6 mb-4 mb-md-0">
                  <label class="text-black" for="fname">เลขประจำตัวนักเรียน </label>
                 <input type="text" name="id_std_card" class="form-control" value="<?php echo $objectResult->id_std_card; ?>">
                </div>



                <!-- <div class="col-md-6">
                  <label class="text-black" for="lname">ประเภทงาน</label>
                  <input type="text" id="lname" class="form-control" required autofocus>
                </div> -->
                <div class="col-md-6">
                  <label class="text-black" >ห้องเรียน</label>
              <input type="text" name="class_room" class="form-control" value="<?php echo $objectResult->class_room; ?>">

                </div>

  

              </div>

             <div class="row form-group">
                <div class="col-md-6 mb-4 mb-md-0">
                   <label class="text-black" >ว.ด.ป. เกิด</label>
                  <input type="text" name="birthday" class="form-control" value="<?php echo $objectResult->birthday; ?>">
                </div>




                <!-- <div class="col-md-6">
                  <label class="text-black" for="lname">ประเภทงาน</label>
                  <input type="text" id="lname" class="form-control" required autofocus>
                </div> -->
     <div class="col-md-6">
           <label class="text-black" >สถานะนักเรียน</label>
               <input type="text" name="types" class="form-control" value="<?php echo $objectResult->types; ?>">

                </div>

</div>
  

             <div class="row form-group">
                <div class="col-md-6 mb-4 mb-md-0">
                  <label class="text-black" >ประเภทนักเรียน</label>
          <input type="text" name="status" class="form-control" value="<?php echo $objectResult->status; ?>">

                </div>



 <div class="col-md-6">
           <label class="text-black" >ครูประจำชั้น</label>
<input type="text" name="teacher" class="form-control" value="<?php echo $objectResult->teacher; ?>">
                <input type="hidden" name="id_std" value="<?php echo $objectResult->id_std; ?>" />

                </div>

</div>
  

        






              <br>
              <p>
                <h5> 2. การติดต่อ</h5>
              </p>
              <hr>


              <div class="row form-group">
                <div class="col-md-6 mb-4 mb-md-0">
                  <label class="text-black" >เบอร์โทรศัพท์</label>

                <input type="text" name="tel" class="form-control" value="<?php echo $objectResult->tel; ?>">
                </div>

                <div class="col-md-6">
                  <label class="text-black" >อีเมล์</label>
          <input type="text" name="email" class="form-control" value="<?php echo $objectResult->email; ?>">

                </div>

              </div>

              <div class="col-md-12">
                  <label class="text-black" >ที่อยู่</label>
          <input type="text" name="address" class="form-control" value="<?php echo $objectResult->address; ?>">

                </div>





                                     <input type="hidden" name="id_std" value="<?php echo $objectResult->id_std; ?>"/>
                                    </div>

                              
<center>
     <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                                                        Edit</button>
                                                                      </center>
<br>

            </form>
          </div>
                    <?php
}
}
?>

    </section>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
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
