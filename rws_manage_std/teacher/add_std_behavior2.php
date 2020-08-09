

      <?php
session_start();
include('../connect/connection.php');
include 'function.php';

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
                 <li>
<a href="../class study/m1_1.php"><i class="fa fa-circle-o"></i> ม.1</a></li>
                <li class="active "><a href="../class study/m2_1.php"><i class="fa fa-circle-o"></i> ม.2</a></li>
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
        เลือกรายการที่นักเรียนทำผิด
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">รายชื่อนักเรียนทั้งหมด</li>
           <li class="active">มัธยมต้น</li>
    <li class="active">ม.2</li>

      </ol>
    </section>
   
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
   <?php

$strSQL = "SELECT * FROM student WHERE id_std='" . $_GET['id'] . "'";

?>
                    <?php
if ($result = $db->query($strSQL)) {
    while ($objectResult = $result->fetch_object()) {
        ?>
     <table class="table table-hover">
                    <tbody>
                      <p>
                      <div align="center"> 
                  <img src="../dist/img/user1.png" width=150 height=150 >
                  </div>
                         <p>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th> ชื่อ - นามสกุล </th>
                            <td><?php echo $objectResult->fullname; ?></td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th> เลขประจำตัวประชาชน</th>
                            <td><?php echo $objectResult->id_card; ?></td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th> เลขประจำตัวนักเรียน</th>
                            <td><?php echo $objectResult->id_std_card; ?></td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>ห้องเรียน</th>
                            <td><?php echo $objectResult->class_room; ?></td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>ว.ด.ป. เกิด</th>
                            <td><?php echo $objectResult->birthday; ?></td>
                        </tr>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>สถานะนักเรียน</th>
                            <td><?php echo $objectResult->types; ?></td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>ประเภทนักเรียน</th>
                            <td><?php echo $objectResult->status; ?></td>
                        </tr>
                          <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>ครูประจำชั้น</th>
                            <td><?php echo $objectResult->teacher; ?></td>
                        </tr>
                    </tbody>
                </table>       
    <div class="modal-footer">
                           <a href="../class study/m2_1.php"> <button type="button" class="btn btn-success pull-left" data-dismiss="modal">ย้อนกลับ</button></a>
            </div>


      <div class="row">
   
              <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab" >ด้านการพฤติกรรม</a></li>
              <li><a href="#timeline" data-toggle="tab">ด้านการเรียน</a></li>
                <li><a href="#time" data-toggle="tab">แสดงผลรายการนักเรียนทำผิดกฏระเบียบ</a></li>
                  <li><a href="#behavior" data-toggle="tab">แสดงผลรายการลงโทษนักเรียนที่ทำผิดระเบียบวินัย</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
             <div class="tab-pane" id="activity">
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
   <form id="add" name="add" method="post" action="check_side_behavior2.php" enctype="multipart/form-data" onsubmit="return checkForm()"  > 
  <div class="box-body">
       <table id="example1" class="table  table-hover">
           <thead class="thead-light">
                <tr >
                      <th style="font-size: 14px; color:white;" width="5%" class="text-left">ลำดับ</th>
                      <th style="font-size: 14px; color:white;" width="10%" class="text-left">ด้านพฤติกรรม</th>
                      <th style="font-size: 14px; color:white;" width="20%" class="text-left" >หัวข้อหลัก</th>
                       <th style="font-size: 14px; color:white;" width="20%"class="text-left">หัวข้อย่อย</th>
                          <th style="font-size: 14px; color:white;" width="5%" class="text-left">จัดการ</th>
                   
                </tr>
                </thead>
                <tbody>
                    <?php



$strSQL = "SELECT * FROM behavior WHERE types_behavior='ด้านการพฤติกรรม' and id_behavior";
           
      $count = 1;

?>
                    <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
              date_default_timezone_set('Asia/Bangkok');
            $date_time = date('d/m/Y h:i:s a', time());
        ?>
                           <td class="text-left" style="font-size: 14px;"> <?php echo $count++; ?></td>

                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->types_behavior; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->topic; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->detail; ?>   </td>
                    

    <td>

         <input type="checkbox"  name="id_behavior" id="id_behavior" value="<?php echo $objResult->id_behavior; ?>" >
     <input type="hidden" name="date_time" value="<?php echo date("Y-m-d"); ?>">
      <input type="hidden" name="time" value="<?php echo  date("h:i:sa"); ?>">
   <input type="hidden" name="status" class="form-control" value="1" >

     <input type="hidden" name="id_std" class="form-control" value="<?php echo $objectResult->id_std; ?>" >
     <input type="hidden" name="std_name" class="form-control" value="<?php echo $objectResult->fullname; ?>" >


 <input type="hidden" name="id_teacher" id='id_teacher' class="form-control select2" value="<?php echo $_SESSION['id']; ?>" >

                    </td>
                    </tr>

                    <?php

    }
}
?>
     
            </table>
                   <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" onclick="myFunction1()" >ยกเลิก</button>
                <button type="submit" class="btn btn-success">บันทึก</button>

              </div>
            </div>
</div>
</div>
</form>             <script>
function myFunction1() {
  document.getElementById("add").reset();
}

</script> 
                            
                        </span>
                    
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <div class="row">
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
    
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
           
                        <span class="username">
                           <div class="col-xs-12">

          <form id="ad" name="ad" method="post" action="check_side_study2.php" enctype="multipart/form-data" onsubmit="return checkForm()"  > 

       
      <!-- /.row (main row) -->
<div class="box-body">
            <table id="example2" class="table  table-hover">
                  <thead class="thead-light">
                <tr>
            <th style="font-size: 14px; color:white;" width="5%" class="text-left">ลำดับ</th>
                      <th style="font-size: 14px; color:white;" width="10%" class="text-left">ด้านพฤติกรรม</th>
                      <th style="font-size: 14px; color:white;" width="20%" class="text-left" >หัวข้อหลัก</th>
                       <th style="font-size: 14px; color:white;" width="20%"class="text-left">หัวข้อย่อย</th>
                          <th style="font-size: 14px; color:white;" width="5%" class="text-left">จัดการ</th>
        
                </tr>
                </thead>
                <tbody>
                    <?php

$strSQL = "SELECT * FROM behavior WHERE types_behavior='ด้านการเรียน' ";

$count = 1;
?>
                    <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
           date_default_timezone_set('Asia/Bangkok');
            $date_time = date('d/m/Y h:i:s a', time());
        ?>
        
                   <td class="text-left" style="font-size: 14px;"> <?php echo $count++; ?></td>
                       <td class="text-left" style="font-size: 14px;"><?php echo $objResult->types_behavior; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->topic; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->detail; ?>   </td>
                  
                    

    <td>

          <input type="checkbox"  name="id_behavior" id="id_behavior" value="<?php echo $objResult->id_behavior; ?>" >
     <input type="hidden" name="date_time" value="<?php echo date("Y-m-d"); ?>">
           <input type="hidden" name="time" value="<?php echo  date("h:i:sa"); ?>">
   <input type="hidden" name="status" class="form-control" value="1" >

     <input type="hidden" name="id_std" class="form-control" value="<?php echo $objectResult->id_std; ?>" >
     <input type="hidden" name="std_name" class="form-control" value="<?php echo $objectResult->fullname; ?>" >


 <input type="hidden" name="id_teacher" id='id_teacher' class="form-control select2" value="<?php echo $_SESSION['id']; ?>" >


                    </td>
                    </tr>

                    <?php
    }
}
?>



    
                </table>
                   <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" onclick="myFunction()" >ยกเลิก</button>
                <button type="submit" class="btn btn-success">บันทึก</button>

            </div>
</div>
</div>
</form>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
             <script>
function myFunction() {
  document.getElementById("ad").reset();
}

</script> 
       
           
         </span>
                    
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <div class="row">
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
    
    
              <div class="tab-pane" id="time">
                <!-- The timeline -->
                 
                        <span class="username">
                           <div class="col-xs-12">


          <tr>
                    <?php

            $my_id = $_GET['id'];
  $query = "SELECT behavior.*, SUM(percent) AS total, behavior.topic,behavior.percent, behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
     WHERE add_behavior.id_std = '$my_id' ";

                    $query_result=mysqli_query($db,$query);
                     while ($row=mysqli_fetch_assoc($query_result)) {
                      $sum= $row['total'];
                     }
                    ?>
                     
    
                       
                  
                 
                     <div align="center"> 
                <?php echo status_01_file_2($sum); ?>
                  </div>

      <!-- /.row (main row) -->
<div class="box-body">
            <table id="example1" class="table  table-hover" >
                <thead class="thead-light">
                  <tr>
                 <th style="font-size: 14px; color:white;" width="5%" class="text-left">ลำดับ</th>
                    <th style="font-size: 14px; color:white;" width="10%" class="text-left">วันที่</th>

             <th style="font-size: 14px; color:white;" width="10%" class="text-left">เวลา</th>
                      <th style="font-size: 14px; color:white;" width="15%" class="text-left">ด้านพฤติกรรม</th>
                      <th style="font-size: 14px; color:white;" width="20%" class="text-left" >หัวข้อหลัก</th>
                       <th style="font-size: 14px; color:white;" width="10%"class="text-left">หัวข้อย่อย</th>
                          <th style="font-size: 14px; color:white;" width="10%" class="text-left">จัดการ</th>
                     </tr>
                  </thead>
                  
                  <tbody align="center">
      <?php

              $my_id = $_GET['id'];

$strSQL = "SELECT behavior.*,behavior.topic,behavior.percent,behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior,add_behavior.date_time,add_behavior.time FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
     WHERE add_behavior.id_std = '$my_id' ";
      $count = 1;

        ?>

        <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>
            <tr>
                  <td class="text-left" style="font-size: 15px;"> <?php echo $count++; ?></td>
        <td class="text-left" style="font-size: 14px;"><?php echo $objResult->date_time; ?></td>

          <td class="text-left" style="font-size: 14px;"><?php echo $objResult->time; ?></td>

                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->types_behavior; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->topic; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->detail; ?>   </td>
              <td class="text-center" style="font-size: 14px;" ><?php echo $objResult->percent; ?>%  </td>
               
                 
            </tr>


            <?php
              }
               }
                   ?>
                   

                   <tr>
                    <?php

         
  $query = "SELECT behavior.*, SUM(percent) AS total, behavior.topic,behavior.percent, behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
     WHERE add_behavior.id_std = '$my_id' ";

                    $query_result=mysqli_query($db,$query);
                     while ($row=mysqli_fetch_assoc($query_result)) {
                      $sum= $row['total'];
                     }
                    ?>
                      <td colspan="6" class="text-center btn-default"  style="font-size: 15px;"> รวม</td>

                      <td class="text-center " style="font-size: 15px;" >  

                        <?php echo number_format($sum); ?>%  </td>
                       
                     </tr>

                         
 <?php
}
}
?>
                </tbody>
              </table>
              
</div>
</div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->

         </span>
                    
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <div class="row">
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
    
              <div class="tab-pane" id="behavior">
                <!-- The timeline -->
                 
                        <span class="username">
 
      <div class="box-body">
            <table id="example1" class="table  table-hover" >
                <thead class="thead-light">
                  <tr>

                                  <th style="font-size: 14px; color:white;" width="3%" class="text-left">ลำดับ</th>
                                    <th style="font-size: 14px; color:white;" width="8%" class="text-left">วันที่</th>

             <th style="font-size: 14px; color:white;" width="6%" class="text-left">เวลา</th>
                      <th style="font-size: 14px; color:white;" width="10%" class="text-left">ด้านพฤติกรรม</th>
                      <th style="font-size: 14px; color:white;" width="15%" class="text-left" >หัวข้อหลัก</th>
                       <th style="font-size: 14px; color:white;" width="8%"class="text-left">หัวข้อย่อย</th>
                       <th style="font-size: 14px; color:white;" width="14%"class="text-left">ประเภทบทลงโทษ</th>
                       <th style="font-size: 14px; color:white;" width="20%"class="text-left">รายละเอียดบทลงโทษ</th>
                 
                     </tr>
                  </thead>
                  
                  <tbody >
      <?php

              $my_id = $_GET['id'];

$strSQL = "SELECT behavior.*,behavior.topic,behavior.percent,behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior,add_behavior.detail_penalty,add_behavior.id_add_behavior,behavior.id_behavior,add_behavior.id_behavior,add_behavior.detail_penalty,add_behavior.penalty,add_behavior.date_time,add_behavior.time  FROM behavior

 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
  LEFT JOIN student ON add_behavior.id_std = student.id_std

     WHERE add_behavior.id_std = '$my_id'  ";

$i = 1;
$count = 1;
        ?>

        <?php
     if($result = $db->query($strSQL)){
             while($objResult = $result->fetch_object()){
            ?>
            <tr>   
          <td class="text-left" style="font-size: 15px;"> <?php echo $count++; ?></td>
           <td class="text-left" style="font-size: 14px;"><?php echo $objResult->date_time; ?></td>

          <td class="text-left" style="font-size: 14px;"><?php echo $objResult->time; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->types_behavior; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->topic; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->detail; ?>   </td>
                    <td class="text-left" style="font-size: 14px;"><?php echo $objResult->penalty; ?></td>
                <td class="text-left" style="font-size: 14px;"><?php echo $objResult->detail_penalty; ?>   </td>
                     
            


                 
            </tr>


            <?php
            $i++;

              }
               }
                   ?>
                   

                   <tr>
                    <?php
         
  $query = "SELECT behavior.*, SUM(percent) AS total, behavior.topic,behavior.percent,behavior.detail,behavior.types_behavior,add_behavior.id_std,add_behavior.id_behavior FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
     WHERE add_behavior.id_std = '$my_id'   ";

                    $query_result=mysqli_query($db,$query);
                     while ($row=mysqli_fetch_assoc($query_result)) {
                      $sum= $row['total'];
                     }
                    ?>
                      <td colspan="7" class="text-center btn-default"  style="font-size: 15px;"> รวม</td>

                      <td class="text-center " style="font-size: 15px;" ><?php echo number_format($sum); ?>%</td>
                       
                     </tr>
                  




                </tbody>
              </table> 
            </div>
          </span>
                  <!-- timeline item -->
              
    </section>
    <!-- /.content -->
 

    <!-- /.content -->
         
    <!-- /.content -->
         

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
    <div class="col-md-7">
     <h3 align="center"></h3>

 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

   <?php

$strSQL = "SELECT * FROM student WHERE id_std='" . $_GET['id'] . "'";

?>
                    <?php
if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>

      <a href="add_std_behavior.php?id=<?php echo $objResult->id_std; ?>" class="btn btn-danger">รายวัน</a>    <a href="penalty.php?id=<?php echo $objResult->id_std; ?>" >(ดูเพิ่มเติ่ม)</a> 


    </div>
  </div>
</div>
 <?php
    }
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-11">
            <?php

              $con= mysqli_connect("localhost","root","","rws_manage_std") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

      $my_id = $_GET['id'];





$query = "SELECT SUM(behavior.status) AS status, (add_behavior.date_time) AS date_time FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
 LEFT JOIN student ON student.id_std = add_behavior.id_std
     WHERE add_behavior.id_std = '$my_id'
     GROUP BY (add_behavior.id_add_behavior) DESC";

            $result = mysqli_query($con, $query);
            $resultchart = mysqli_query($con, $query);
            //for chart
            $date_time = array();
            $status = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $date_time[] = "\"".$rs['date_time']."\"";
            $status[] = "\"".number_format($rs['status'])."\"";
            }
            $date_time = implode(",", $date_time);
            $status = implode(",", $status);
            
            ?>
                        <h3 align="center">รายงานแยกตามวันทำผิดกฏระเบียบ</h3>

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
                label: 'รายงานรายได้ แยกตามวัน ',
                data: [<?php echo $status;?>,
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

              <th style="font-size: 14px; color:white;" width="30%"class="text-left">ทำผิดกฏระเบียบ</th>
           
       

                </tr>
                </thead>
                <tbody>


 


                 <?php 
                $my_id = $_GET['id'];
       $strSQL = "
           SELECT   SUM(add_behavior.status) AS status,(behavior.detail) AS detail, add_behavior.date_time,student.fullname,behavior.detail,DATE_FORMAT(add_behavior.date_time, '%d-%m-%Y') AS date_time,add_behavior.time FROM behavior
 LEFT JOIN add_behavior ON behavior.id_behavior = add_behavior.id_behavior
 LEFT JOIN student ON student.id_std = add_behavior.id_std
     WHERE add_behavior.id_std='$my_id'
     GROUP BY (add_behavior.id_add_behavior) DESC
            ";      
             $count = 1;
               


if ($result = $db->query($strSQL)) {
    while ($objResult = $result->fetch_object()) {
        ?>


         <td class="text-left" style="font-size: 15px;"> <?php echo $count++; ?></td>
         <td class="text-left" style="font-size: 15px;"><?php echo $objResult->date_time; ?></td>
                  <td class="text-left" style="font-size: 15px;"><?php echo $objResult->time; ?></td>


         <td class="text-left" style="font-size: 15px;"><?php echo $objResult->detail; ?></td> 
       


           
       
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
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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
