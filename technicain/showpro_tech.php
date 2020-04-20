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
      header("location:logout.php");
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

  <title>Housewares Repairing | Home's Technician </title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="admin_home.php"> REPAIR CENTER </a>

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

          <li class="nav-item active">
        <a class="nav-link" href="smwork.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>&nbsp; รายการซ่อมเสร็จ</span></a>
      </li>
     
          <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="fas fa-fw fa-user"></i>
          <span>&nbsp;โปรไฟล์ของฉัน</span></a>
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










<?php
  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("hwrp");
$strSQL = "SELECT * FROM customers WHERE cusID='".$_SESSION["id"]."'"; 
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
            ?>

                
                  <legend>รายละเอียดเกี่ยวกับลูกค้า
                    
                  </legend>

                  
                  <div class="form-group">
                    <label class="control-label col-md-2">ชื่อ-สกุล</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["cusName"];?>" disabled>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-1">ชื่อผู้ใช้</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["cusUsername"];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-1">ที่อยู่</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["cusAddress"];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">เบอร์โทร</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["cusPhone"];?>" disabled>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-1">อีเมล</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["cusEmail"];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-1">รหัสผ่าน</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control"
                      value="<?php echo $objResult["cusPassword"];?>" disabled>
                    </div>
                  </div>


        <!-- Scroll to Top Button-->
              
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                <a class="btn btn-primary" href="logout.php">แก้ไข</a>
                <div alight=right> <button type="button" class="btn btn-info btn-xs" data-toggle="modal"
                      data-target="#editHis">
                    <i class="lyphicon glyphicon-edit"></i> Edit</button></div>
              </div>
            </div>
          </div>
        </div>
        <?php

  mysql_close($objConnect);
  ?>