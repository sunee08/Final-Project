<?php
include('../db/connect.php');
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
  include('../db/connect.php');
  $strSQL = "SELECT * FROM customers WHERE cusID = '".$_SESSION['id']."' ";
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

  <title>Housewares Repairing | Customer Home</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

  </head>
  <body>
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="cus_home.php"> HOUSEWARE REPAIRING </a>
    <button class="btn btn-link btn-sm text-white  order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
          aria-describedby="basic-addon2">
          <div class="input-group-append">
          <button class="btn btn-warning" type="button">
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
          <i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $objResult["cusName"]; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">โปรไฟล์ของฉัน</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">ออกจากระบบ</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="cus_home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>&nbsp;หน้าแรก</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="inform_repair.php">
          <i class="fas fa-fw fa-clock"></i>
          <span>แจ้งซ่อม</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="informhistory.php">
          <i class="fas fa-fw fa-table"></i>
          <span>&nbsp;ประวัติการแจ้งซ่อม</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="payment.php">
          <i class="fas fa-fw fa-clone"></i>
          <span>&nbsp;การชำระเงิน</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="profile.php">
          <i class="fas fa-fw fa-user"></i>
          <span>&nbsp;โปรไฟล์ของฉัน</span></a>
      </li>
      <li class="nav-item  dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>&nbsp;การตั้งค่า</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">หน้าจอเข้าสู่ระบบ:</h6>
          <a class="dropdown-item" href="login.php">เข้าสู่ระบบ</a>
          <a class="dropdown-item" href="#">ลืมรหัสผ่าน</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <!-- <li class="nav-item ">
        <a class="nav-link" href="review.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>&nbsp;รีวิว</span></a>
      </li> -->
      <li class="nav-item ">
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
          <li>ติดตามสถานะ </a></li>
        </ol>
        <br>
        <!-- Scroll to Top Button-->
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
<?php

include('../db/connect.php');

$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("hwrp");

  $strSQL = "SELECT infor_inform.*, customers.cusID,customers.cusName,customers.cusPhone,customers.cusAddress
  ,infor_inform.descrip,infor_inform.hdate,infor_inform.ntime,infor_inform.sub,infor_inform.main,
  infor_inform.cusID,infor_inform.id,technicain.techID,technicain.techName
  
  FROM infor_inform
  
  LEFT JOIN customers ON customers.cusID = infor_inform.cusID 
  LEFT JOIN technicain ON technicain.techID = infor_inform.techID 

  WHERE  customers.cusID ='".$_SESSION["id"]."' AND  technicain.techID ";

$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$i = 1;
$count =1;
?>
      <div id="wrapper">
        <div id="content-wrapper">
          <div class="container-fluid">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i> &nbsp; ข้อมูลลูกค้า </div>
                <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="">
                    <thead>
                      <tr style="font-weight:bold; color:#040404; text-align:center; background:#f7f8f8;">
                        <th>
                          <div>เลขที่</div>
                        </th>
                        <th>
                          <div>ผู้รับซ่อม</div>
                        </th>
                        <th>
                          <div>ประเภท</div>
                        </th>
                        <th>
                          <div>รายการ</div>
                        </th>
                        <th>
                          <div >สาเหตุ</div>
                        </th>
                        <th>
                          <div>วันที่เวลาที่สะดวก</div>
                        </th>
                        <th>
                          <div>สถานะ<div>
                        </th>
                      </tr>
                    </thead>

                    <?php
              while($objResult = mysql_fetch_array($objQuery))
                  {
                  ?>
                    </thead>
                </div>
                <tr>
                  <td>
                    <div align="center"> <?php echo $count++;?></td>
                  <td><?php echo $objResult["techName"];?></td>
                  <td><?php echo $objResult["main"];?></td>
                  <td><?php echo $objResult["sub"];?></td>
                  <td><?php echo $objResult["descrip"];?></td>
                  <td align="center"><?php echo $objResult["hdate"];?> &nbsp;
                      <?php echo $objResult["ntime"];?></td>
                  <td align="center"><span class="btn btn-info" <?php echo $objResult["status"];?>>กำลังดำเนินการ</span>
                  </td>
                  </td>    
                  </div>
                  </div>
                  </div>
                  </td>
                  </tr>
                  <?php
                  $i++;
                  }
                  ?>
                  </tbody>
                  </table>
            <?php
              include('../db/connect.php');
              $strSQL = "SELECT * FROM customers WHERE cusID='".$_SESSION["id"]."'"; 
              $objQuery = mysql_query($strSQL);
              $objResult = mysql_fetch_array($objQuery);
            ?>
            <!--form alert add topic-->
            <div class="modal fade" id="inform <?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <form method="post" enctype="multipart/form-data" action="save_inform.php">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">เพิ่มใบส่งซ่อม/เคลม</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
              <div class="modal-body">
              <div class="form-group">
              <label for="">รหัสการส่งซ่อม/เคลม</label>
              <input type="text" name="cusID" id="cusID" class="form-control" readonly
              value="<?php echo $objResult["cusID"];?>" class="form-control">
              </div>
              <div class="form-group row">
              <div class="col-md-12">
              <label for="">ชื่อผู้ส่งซ่อม</label>
              <input type="text" name="" id="" class="form-control" disable
              value="<?php echo $objResult["cusName"];?>">
              </div>
              </div>
              <div class="form-group row">
                                              <div class="col-md-6">
                                              <label for="typestech">ประเภท</label>
                                              <select class="form-control" id="typestech" name="main">
                                              <option value="no">-เลือกประเภท-</option>
                                              </select>
                                              </div>
                                              <div class="col-md-6"> 
                                              <label for="sub_types">อุปกรณ์เสีย</label>
                                              <select class="form-control" id="sub_types" name="sub">
                                              <option value="no">-เลือกอุปกรณ์-</option>																			
                                              </select>
                                              </div>
                                              <div class="modal-body">
                                              <div class="form-group row">
                                              <div class="col-md-12">
                                              <label for="">อาการ</label>
                                              <textarea name="descrip" id="descrip" class="form-control" required="required"></textarea>
                                              <div>
                                              <div class="modal-body">
                                              <div class="form-group row">
                                              <div class="col-md-6">
                                              <label for="">วันที่สะดวก</label>
                                              <input type="date" name="hdate" id="hdate" class="form-control"
                                              autocomplete="off" required="required">
                                              </div>
                                              <div class="col-md-6">
                                              <label for="">เวลา</label>
                                              <input type="time" name="ntime" id="ntime" class="form-control"
                                              autocomplete="off" required="required">
                                              </div>
                                              <div class="modal-footer">
                                              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times fa-fw"></i>ปิด</button>
                                              <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-fw"></i>บันทึก</button>
                                              <div>
                                              <!-- /.modal-content -->
                                              </div>
                                              </form>
                                  <!-- /.modal-dialog -->
                                              <?php 
                                              mysql_close();
                                              ?>
            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="../vendor/chart.js/Chart.min.js"></script>
            <script src="../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin.min.js"></script>
            <!-- Demo scripts for this page-->
            <script src="../js/demo/datatables-demo.js"></script>
            <script src="../js/demo/chart-area-demo.js"></script>
            <script src="sub_types.js"></script>
</body>
</html>