<?php
session_start();
if($_SESSION['id']==""){

echo "Please Login!";
exit(); 
} 
  $sessionlifetime = 30; //กำหนดเป็นนาที
  if(isset($_SESSION["timeLasetdActive"])){
    $seclogin = (time()-$_SESSION["timeLasetdActive"])/60;
    //หากไม่ได้ Active ในเวลาที่กำหนด
    if($seclogin>$sessionlifetime){
      //goto logout page
      header("location:../logout.php");
      exit;
    }else{
      $_SESSION["timeLasetdActive"] = time();
    }
  }else{
    $_SESSION["timeLasetdActive"] = time();
  }
  //
  //*** Get User Login
  mysql_connect("localhost","root","");
  mysql_select_db("hwrp");
  $strSQL = "SELECT * FROM technicain WHERE techID = '".$_SESSION['id']."' ";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery); 
?>
<!DOCTYPE html>



<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <titleHousewares Repairing</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

  

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="admin_home.php"> R E P A I R S CENTER </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
          aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
      <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle active" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $objResult["techName"]; ?></span>  
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">โปรไฟล์ของฉัน</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">ออกจากระบบ</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link" href="tech_home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>&nbsp;หน้าแรก</span>
        </a>
      </li>
       </li>
      <li class="nav-item ">
        <a class="nav-link" href="tech_approve.php">
        <i class="fas fa-fw fa-check-circle"></i>
          <span>&nbsp;รอการยืนยัน<span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="infor_approval.php">
          <i class="fas fa-fw fa-table"></i>
          <span>&nbsp;รายการแจ้งซ่อมทั้งหมด</span></a>
     
          <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="fas fa-fw fa-user"></i>
          <span>&nbsp;โปรไฟล์ของฉัน</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>&nbsp;การเข้าสู่ระบบ</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">หน้าจอเข้าสู่ระบบ:</h6>
          <a class="dropdown-item" href="admin_login.php">เข้าสู่ระบบ</a>
          <a class="dropdown-item" href="#">ลืมรหัสผ่าน</a>
          <div class="dropdown-divider"></div>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_info.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>&nbsp; ตั้งค่า</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php" class="dropdown-item" href="#" data-toggle="modal"
          data-target="#logoutModal">
          <i class="fas fa-fw fa-times "></i>
          <span>&nbsp;ออกจากระบบ</span></a>
      </li>
    </ul>
    </nav>
      <div id="content-wrapper">
      <div class="container-fluid">
<!-- Breadcrumbs-->
<br>
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin_home.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">หน้าแรก</li>
        </ol>

  <!-- Scroll to Top Button-->
  myProfile
  <?php
  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("hwrp");
$strSQL = "SELECT * FROM technicain WHERE techID='".$_SESSION["id"]."'"; 
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
            ?>

                
                  <legend>รายละเอียดเกี่ยวกับช่าง
                    
                  </legend>

                  
                  <div class="form-group">
                    <label class="control-label col-md-6">ชื่อ-สกุล</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["techName"];?>" disabled>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-6">ชื่อผู้ใช้</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["techUsername"];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-6">ที่อยู่</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["techAddress"];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-6">เบอร์โทร</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["techPhone"];?>" disabled>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-6">อีเมล</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["techEmail"];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-6">รหัสผ่าน</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["techPassword"];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-6">ประเภทช่าง</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["tech_Types"];?>" disabled>
                    </div>
                  </div>

                  

                   <!-- Scroll to Top Button-->
              
                   <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                
                <div alight=right> <button type="button" class="btn btn-info btn-xs" data-toggle="modal"
                      data-target="#rrr">
                    <i class="lyphicon glyphicon-edit"></i> Edit</button></div>
              </div>
            </div>
          </div>
        </div>
        <?php

  mysql_close($objConnect);
  ?>

<div class="modal fade" id="rrr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">

              <form method="post" enctype="multipart/form-data" action="save_profile.php">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">โปรไฟล์ของฉัน</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="card_code">รหัสช่าง</label>
                        <input type="text" name="techID" id="techID"  class="form-control" readonly
                        value="<?php echo $objResult["techID"];?>" class="form-control">
                      </div>
                      
                      <div class="modal-body">
                      <div class="form-group row">
                        <div class="col-md-10">
                          <label for="cusName">ชื่อ-สกุล</label>
                          <input type="text" name="techName" id="techName" class="form-control" 
                            value="<?php echo $objResult["techName"];?>">
                        </div>
                        <div class="modal-body">
                        <div class="form-group row">
                        <div class="col-md-10">
                          <label for="cusName">ชื่อผู้ใช้</label>
                          <input type="text" name="techUsername" id="techUsername" class="form-control" 
                            value="<?php echo $objResult["techUsername"];?>">
                        </div>
                        <div class="modal-body">
                        <div class="form-group row">
                        <div class="col-md-10">
                          <label for="cusName">ที่อยู่</label>
                          <input type="text" name="techAddress" id="techAddress" class="form-control" 
                            value="<?php echo $objResult["techAddress"];?>">
                        </div>
                        <div class="modal-body">
                        <div class="form-group row">
                        <div class="col-md-10">
                          <label for="cusName">เบอร์โทร</label>
                          <input type="text" name="techPhone" id="techPhone" class="form-control" 
                            value="<?php echo $objResult["techPhone"];?>">
                        </div>
                        <div class="modal-body">
                        <div class="form-group row">
                        <div class="col-md-10">
                          <label for="cusName">อีเมล</label>
                          <input type="text" name="techEmail" id="techEmail" class="form-control" 
                            value="<?php echo $objResult["techEmail"];?>">
                        </div>
                        <div class="modal-body">
                        <div class="form-group row">
                        <div class="col-md-10">
                          <label for="cusName">รหัสผ่าน</label>
                          <input type="text" name="techPassword" id="techPassword" class="form-control" 
                            value="<?php echo $objResult["techPassword"];?>">
                        </div>
                        <div class="modal-body">
                        <div class="form-group row">
                        <div class="col-md-10">
                          <label for="cusName">ประเภทช่าง</label>
                          <input type="text" name="techEmail" id="techEmail" class="form-control" 
                            value="<?php echo $objResult["techEmail"];?>">
                        </div>
                        <div>
                        <div alight=right>
                                          <div class="modal-footer">
                                            <div class="col-md-10">
                                              <button type="submit" name="save" class="btn btn-primary btn-sm">
                                                <i class="fa fa-save fa-fw"></i>บันทึก</button>
                                              <div>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                               </form>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">คุณพร้อมที่จะออกจากระบบ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">เลือก "ออกจากระบบ" ข้างล่าง หากต้องการออกจากเซสชั่นนี้.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
          <a class="btn btn-primary" href="logout.php">ออกจากระบบ</a>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-bar-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html