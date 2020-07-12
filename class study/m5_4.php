<?php
session_start();
include('../connect/connection.php');

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
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $_SESSION['name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['rank']; ?></a>
        </div>
      </div>
      <!-- search form -->
   
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">เมนู</li>
       

   <li >
             <a href="../teacher/add_user.php">
            <i class="fa fa-pie-chart"></i>
            <span>จัดการผู้ที่มีสิทธิเข้าใช้งาน</span>
          </a>
        </li>

         <li >
        <a href="../teacher/add_student.php">
            <i class="fa fa-pie-chart"></i>
            <span>เพิ่มข้อมูลนักเรียน</span>
          </a>
        </li>
          <li >
          <a href="../teacher/profile.php">
            <i class="fa fa-pie-chart"></i>
            <span>ข้อมูลผู้ดูแลระบบ</span>
          </a>
        </li>
      
      
<li class="active treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>รายชื่อนักเรียนทั้งหมด</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                  <li class=" treeview">
              <a href="#"><i class="fa fa-circle-o"></i> มัธยมต้น
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                   <li>
              <a href="../class study/m1_1.php"><i class="fa fa-circle-o"></i> ม.1</a></li>
              <li><a href="../class study/m2_1.php"><i class="fa fa-circle-o"></i> ม.2</a></li>
              <li><a href="../class study/m3_1.php"><i class="fa fa-circle-o"></i> ม.3</a></li>

              </ul>
            </li>
               <li class="active treeview">
              <a href="#"><i class="fa fa-circle-o"></i> มัธยมปลาย
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="../class study/m4_1.php"><i class="fa fa-circle-o"></i> ม.4</a></li>
              <li class="active treeview"><a href="../class study/m5_1.php"><i class="fa fa-circle-o"></i> ม.5</a></li>
              <li><a href="../class study/m6_1.php"><i class="fa fa-circle-o"></i> ม.6</a></li>
                </li>
              </ul>
            </li>
          </ul>
        </li>


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
            <i class="fa fa-th"></i> <span>แสดงผล</span>
          </a>
        </li>

        <li>
          <a href="../teacher/report.php">
            <i class="fa fa-pie-chart"></i>
            <span>รายงาน</span>
          </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        รายชื่อนักเรียน มัธยมศึกษาปีที่ 5
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">  <div class="modal-footer">
           
<a href="../class study/m5_1.php"><button type="submit" class="btn bg-red">ม.5/1</button></a>
<a href="../class study/m5_2.php"> <button type="submit" class="btn bg-red">ม.5/2</button></a>
<a href="../class study/m5_3.php"><button type="submit" class="btn bg-red">ม.5/3</button></a>
<a href="../class study/m5_4.php"> <button type="submit" class="btn bg-red">ม.5/4</button></a>
<a href="../class study/m5_5.php"> <button type="submit" class="btn bg-red">ม.5/5</button></a>
             
              </div>

            <div class="box-header">
  
        <!-- /.modal -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover">
                  <thead class="thead-light">
                <tr>
                     <th style="font-size: 15px;" width="3%" class="text-left">ลำดับ</th>
                  <th style="font-size: 15px;" width="10%" class="text-left">เลขประจำตัวนักเรียน</th>
                  <th style="font-size: 15px;" width="10%" class="text-left">ชื่อ - นามสกุล</th>
                  <th style="font-size: 15px;" width="5%" class="text-left">ห้องเรียน</th>
                  <th style="font-size: 15px;" width="5%" class="text-left">ว.ด.ป.เกิด</th>
                  <th style="font-size: 15px;" width="7%" class="text-left">สถานะนักเรียน</th>
                  <th style="font-size: 13px;" width="5%" class="text-left">จัดการ</th>

                </tr>
                </thead>
                <tbody>
                       <?php
include('../connect/connection.php');

$strSQL = "SELECT * FROM student  where class_room= 'ม.5/4'  ";

$i = 1;
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
         <td class="text-left" style="font-size: 15px;"><?php echo $objResult->birthday; ?></td>
        <td class="text-left" style="font-size: 15px;"><?php echo $objResult->status; ?></td>
                  

    <td>

                      <button type="button" class="btn btn-warning btn-xs" data-toggle="modal"
                        data-target="#editsub<?php echo $i; ?>">
                        <i class="fa fa-edit" title="Edit"></i> </button>

                      </center>


                      <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                        data-target="#show<?php echo $i; ?>">
                        <i class="fa fa-eye"></i></button>

                      <a href="delete_member.php?id=<?php echo $objResult->member_id; ?>" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash" title="Delete"></i></a>






                      <div class="modal fade" id="show<?php echo $i; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header bg-info">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h5 class="modal-title">View Proposal</h5>
                            </div>

                            <div class="modal-body">
                              <form class="form-horizontal" method="post" action="check_edit_member.php">
                                <input type="hidden" name="member_id" value=" <?php echo $objResult->member_id; ?>">

                                <div class="card-body">
                                  <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Studen</label>
                                    <div class="col-sm-10">
                                      <?php echo $objResult->member_idcard; ?>
                                    </div>
                                  </div>



                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                      <?php echo $objResult->member_username; ?> </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Student Name</label>
                                    <div class="col-sm-10">
                                      <?php echo $objResult->member_fullname; ?>
                                    </div>
                                  </div>



                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <?php echo $objResult->member_email; ?>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">

                                      <?php echo $objResult->member_phone; ?> </div>
                                  </div>


                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 ">Gender</label>
                                    <div class="col-sm-10">

                                      <?php echo $objResult->member_gender; ?> </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 ">Position</label>
                                    <div class="col-sm-10">

                                      <?php echo $objResult->member_pos; ?> </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal -->





                      <div class="modal fade" id="editsub<?php echo $i; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">

                          <div class="modal-content">
                            <div class="modal-header bg-info">
                              <h5 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                View Member</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                  aria-hidden="true">&times;</span></button>
                              
                            </div>

                            <div class="modal-body">
                              <form class="form-horizontal" method="post" action="check_edit_member.php">
                                <input type="hidden" name="member_id" value=" <?php echo $objResult->member_id; ?>">

                                <div class="card-body">
                                  <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Studen</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="member_idcard" name="member_idcard"
                                        value="  <?php echo $objResult->member_idcard; ?>">
                                    </div>
                                  </div>



                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="member_username"
                                        name="member_username" value="<?php echo $objResult->member_username; ?>">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Student Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="member_fullname"
                                        name="member_fullname" value="<?php echo $objResult->member_fullname; ?>">
                                    </div>
                                  </div>



                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="member_email" name="member_email"
                                        value="<?php echo $objResult->member_email; ?>"> </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="member_phone" name="member_phone"
                                        value="<?php echo $objResult->member_phone; ?>"> </div>
                                  </div>


                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 ">Gender</label>
                                    <div class="col-sm-10">

                                      <?php echo $objResult->member_gender; ?> </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 ">Position</label>
                                    <div class="col-sm-10">

                                      <?php echo $objResult->member_pos; ?> </div>
                                  </div>




                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                        class="glyphicon glyphicon-remove"></i>
                                      Cancle</button>
                                    <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                      Edit</button>
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>




                    </td>
                    </tr>

                    <?php
$i++;
    }
}
?>

                </table>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
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
