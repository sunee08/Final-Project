

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
       
       

   <li >
             <a href="add_user.php">
            <i class="fa fa-pie-chart"></i>
            <span>จัดการผู้ที่มีสิทธิเข้าใช้งาน</span>
          </a>
        </li>

         <li >
        <a href="add_student.php">
            <i class="fa fa-pie-chart"></i>
            <span>เพิ่มข้อมูลนักเรียน</span>
          </a>
        </li>
          <li >
          <a href="profile.php">
            <i class="fa fa-pie-chart"></i>
            <span>ข้อมูลผู้ดูแลระบบ</span>
          </a>
        </li>
      
      
      <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>รายชื่อนักเรียนทั้งหมด</span>
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

         <li class=" active treeview">
          <a href="add_behavior.php">
            <i class="fa fa-th"></i> <span>การจัดการพฤติกรรมนักเรียน</span>
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
            <i class="fa fa-th"></i> <span>แสดงผล</span>
          </a>
        </li>

        <li>
          <a href="report.php">
            <i class="fa fa-pie-chart"></i>
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
กฏระเบียบของโรงเรียนรุ่งโรจน์วิทยา      </h1>
       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">การจัดการพฤติกรรมนักเรียน</li>
      </ol>
    </section>
<!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
 เพิ่มกฏระเบียบ            </button>
            </div>

          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> เพิ่มกฏระเบียบ  </h4>
              </div>
              <div class="modal-body">
           

         <form id="add" name="add" method="post" action="check_behavior.php" enctype="multipart/form-data" onsubmit="return checkForm()"  > 

              <div class="user-details">
                <div class="form-group">
                    <label>หัวข้อหลัก</label>

   <input type="text" name="topic" class="form-control select2" >
                  <div class="input-group-append">
                    
                  </div>
                </div>
                <div class="form-group">
                                      <label>หัวข้อย่อย</label>
          <input type="text" name="detail" class="form-control select2"  >
                  <div class="input-group-append">
                   
                  </div>
                </div>

                 <div class="form-group">
                                      <label>ประเภท</label>
          <input type="text" name="types_behavior" class="form-control select2"  >
          *ประเภท ด้านการพฤติกรรม หรือ ด้านการเรียน
                  <div class="input-group-append">
                   
                  </div>
                </div>


                 <div class="form-group">
                                      <label>เปอรเซนต์</label>
          <input type="text" name="percent" class="form-control select2"  >
                  <div class="input-group-append">
                   
                  </div>
                </div>

    <input type="hidden" name="id_teacher" class="form-control select2" value="<?php echo $_SESSION['name']; ?>" >
            


              </div>

                    

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">ลงทะเบียน</button>

              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

</form>
    
       
      <div class="row">
   
              <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">ด้านการพฤติกรรม</a></li>
              <li><a href="#timeline" data-toggle="tab">ด้านการเรียน</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
             <div class="tab-pane" id="activity">
                <!-- The timeline -->
                          <!-- Post -->
                <div class="post">
                  <div class="user-block">
                   
                        <span class="username">
                           <div class="col-xs-14">
    <style>
.table .thead-light th {
  color: #401500;
  background-color: #3c8dbc
;
  border-color: #3c8dbc;
}
</style>
       
      <!-- /.row (main row) -->
  <div class="box-body">
           <table id="example1" class="table  table-hover">
                  <thead class="thead-light">
                <tr >
                      <th style="font-size: 14px; color:white;" width="5%" class="text-left">ลำดับ</th>
                      <th style="font-size: 14px; color:white;" width="15%" class="text-left">ด้านพฤติกรรม</th>
                   <th style="font-size: 14px; color:white;" width="20%" class="text-left">หัวข้อหลัก</th>
                    <th style="font-size: 14px; color:white;" width="10%"class="text-left">หัวข้อย่อย</th>
                      <th style="font-size: 14px; color:white;" width="10%" class="text-left">วันที่</th>
                     <th style="font-size: 14px; color:white;" width="10%" class="text-left">การจัดการ</th>
                   
                </tr>
                </thead>
                <tbody>
                    <?php

$strSQL = "SELECT * FROM behavior WHERE types_behavior='ด้านการพฤติกรรม' ";
$i = 1;
$count = 1;
?>
                    <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>
        
                <td class="text-left" style="font-size: 14px;"> <?php echo $count++; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->types_behavior; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->topic; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->detail; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->date_time; ?></td>
                    



  <td class="text-left" style="font-size: 14px;" >


           <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-default1<?php echo $i; ?>">
  <i class="fa fa-edit"></i>       </button>

                      </center>


                      <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                        data-target="#view<?php echo $i; ?>">
                        <i class="fa fa-eye"></i></button>

                 
 <a href="../function/delete_side_behavior.php?id=<?php echo $objResult->id_behavior; ?>"
                          class="btn btn-danger btn-xs" onclick="return confirm('ยืนยันการลบข้อมูล?')">
                        ลบ</a>


   <div class="modal fade" id="modal-default1<?php echo $i; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <form class="form-horizontal" method="post" action="check_edit_behavior1.php">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> แก้ไขกฏระเบียบ  </h4>
              </div>
              <div class="modal-body">
           


              <div class="user-details">
                <div class="form-group">
                    <label>หัวข้อหลัก</label>
<p>
   <input type="text" name="topic" class="form-control select2" value="<?php echo $objResult->topic; ?>">
                                      <div class="input-group-append" >

                  </div>
                <br>

                <div class="form-group">
                                      <label>หัวข้อย่อย</label>
                                      <p>

          <input type="text" name="detail"  class="form-control select2 " value="<?php echo $objResult->detail; ?>">
                   <div class="input-group-append"  >
                   
                  </div>
         
     <br>
                 <div class="form-group">
                                      <label>ประเภท</label>
                                          <p>

          <input type="text" name="types_behavior" class="form-control  " value="<?php echo $objResult->types_behavior; ?>"  >
             <div class="input-group-append" >
          <p>
          *ประเภท ด้านการพฤติกรรม หรือ ด้านการเรียน
                   
                  </div>
               <br>


                 <div class="form-group">
                                      <label>เปอรเซนต์</label>
                                      <p>
          <input type="text" name="percent" class="form-control select2" value="<?php echo $objResult->percent; ?>"  >
   <div class="input-group-append" >     
                   
               
                </div>

                <input type="hidden" name="id_behavior" class="form-control select2" value="<?php echo $objResult->id_behavior; ?>" >


              </div>

                    

              </div>
                           <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>

              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

</form>
</div>
</div>
</div>
</div>
   <div class="modal fade" id="view<?php echo $i; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <form class="form-horizontal">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> ดูข้อมูลกฏระเบียบ  </h4>
              </div>
              <div class="modal-body">
           


              <div class="user-details">
                <div class="form-group">
                    <label>หัวข้อหลัก</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $objResult->topic; ?>
<p>


                  </div>
                <br>

                <div class="form-group">
                                      <label>หัวข้อย่อย</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $objResult->detail; ?>
                                      <p>


                   
                  </div>
         
     <br>
                 <div class="form-group">
                                      <label>ประเภท</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $objResult->types_behavior; ?>
                                          <p>

    
 
          *ประเภท ด้านการพฤติกรรม หรือ ด้านการเรียน
                   
                  </div>
               <br>


                 <div class="form-group">
                                      <label>เปอรเซนต์</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $objResult->percent; ?>
                                      <p>

                   
               
                </div>

              
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

</form>
    

                    </td>
                    </tr>

                    <?php
$i++;
    }
}
?>

            </table>
                 
            </div>
</div>
</div>
</form>
                         
                        </span>
                    
                    
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                  
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                   
                        <!-- /.col -->
                       
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

              
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                          <!-- Post -->
                <div class="post">
                  <div class="user-block">
                   
                        <span class="username">
                           <div class="col-xs-12">

     
       
      <!-- /.row (main row) -->
<div class="box-body">
             <table id="example2" class="table  table-hover">
                  <thead class="thead-light">
                <tr>
              <th style="font-size: 14px; color:white;" width="10%" class="text-left">ลำดับ</th>
             <th style="font-size: 14px; color:white;" width="20%" class="text-left">ด้านพฤติกรรม</th>

                     <th style="font-size: 14px; color:white;" width="20%" class="text-left">หัวข้อหลัก</th>
                    <th style="font-size: 14px; color:white;" width="20%"class="text-left">หัวข้อย่อย</th>
                     <th style="font-size: 14px; color:white;"  width="20%" class="text-left">วันที่</th>
                       <th style="font-size: 14px; color:white;" width="20%" class="text-left">การจัดการ</th>
                   
                </tr>
                </thead>
                <tbody>
                    <?php

$strSQL = "SELECT * FROM behavior WHERE types_behavior='ด้านการเรียน' ";
$i = 1;
$count = 1;
?>
                    <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>
        
                   <td class="text-left" style="font-size: 14px;"> <?php echo $count++; ?></td>
                     <td class="text-left" style="font-size: 14px;"><?php echo $objResult->types_behavior; ?></td>
                    <td class="text-left" style="font-size: 14px;"><?php echo $objResult->topic; ?></td>
                    <td class="text-left" style="font-size: 14px;"><?php echo $objResult->detail; ?></td>
                  
                    <td class="text-left" style="font-size: 14px;"><?php echo $objResult->date_time; ?></td>
                    

  
  <td class="text-left" style="font-size: 14px;" >


           <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-default2<?php echo $i; ?>">
  <i class="fa fa-edit"></i>       </button>

                      </center>


                      <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                        data-target="#view1<?php echo $i; ?>">
                        <i class="fa fa-eye"></i></button>

                 
 <a href="../function/delete_side_study.php?id=<?php echo $objResult->id_behavior; ?>"
                          class="btn btn-danger btn-xs" onclick="return confirm('ยืนยันการลบข้อมูล?')">
                        ลบ</a>


   <div class="modal fade" id="modal-default2<?php echo $i; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <form class="form-horizontal" method="post" action="check_edit_study1.php">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> แก้ไขกฏระเบียบ  </h4>
              </div>
              <div class="modal-body">
           


              <div class="user-details">
                <div class="form-group">
                    <label>หัวข้อหลัก</label>
<p>
   <input type="text" name="topic" class="form-control select2" value="<?php echo $objResult->topic; ?>">
                                      <div class="input-group-append" >

                  </div>
                <br>

                <div class="form-group">
                                      <label>หัวข้อย่อย</label>
                                      <p>

          <input type="text" name="detail"  class="form-control select2 " value="<?php echo $objResult->detail; ?>">
                   <div class="input-group-append"  >
                   
                  </div>
         
     <br>
                 <div class="form-group">
                                      <label>ประเภท</label>
                                          <p>

          <input type="text" name="types_behavior" class="form-control  " value="<?php echo $objResult->types_behavior; ?>"  >
             <div class="input-group-append" >
          <p>
          *ประเภท ด้านการพฤติกรรม หรือ ด้านการเรียน
                   
                  </div>
               <br>


                 <div class="form-group">
                                      <label>เปอรเซนต์</label>
                                      <p>
          <input type="text" name="percent" class="form-control select2" value="<?php echo $objResult->percent; ?>"  >
   <div class="input-group-append" >     
                   
               
                </div>

                <input type="hidden" name="id_behavior" class="form-control select2" value="<?php echo $objResult->id_behavior; ?>" >


              </div>

                    

              </div>
                           <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>

              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

</form>
</div>
</div>
</div>
</div>
   <div class="modal fade" id="view1<?php echo $i; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <form class="form-horizontal">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> ดูข้อมูลกฏระเบียบ  </h4>
              </div>
              <div class="modal-body">
           


              <div class="user-details">
                <div class="form-group">
                    <label>หัวข้อหลัก</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $objResult->topic; ?>
<p>


                  </div>
                <br>

                <div class="form-group">
                                      <label>หัวข้อย่อย</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $objResult->detail; ?>
                                      <p>


                   
                  </div>
         
     <br>
                 <div class="form-group">
                                      <label>ประเภท</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $objResult->types_behavior; ?>
                                          <p>

    
 
          *ประเภท ด้านการพฤติกรรม หรือ ด้านการเรียน
                   
                  </div>
               <br>


                 <div class="form-group">
                                      <label>เปอรเซนต์</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $objResult->percent; ?>
                                      <p>

                   
               
                </div>

              
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

</form>
    
                    </td>
                    </tr>

                    <?php
$i++;
    }
}
?>

                </table>
            </div>
</div>
</div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
              
       
              <!-- /.tab-pane -->

           
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


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

<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
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
</script>
</body>
</html>