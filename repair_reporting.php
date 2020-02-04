<?php
	session_start();
  $serverName	  = "localhost";
  $username	  = "root";
  $password	  = "";
  $dbName	  = "housewares_repairing";
  
  $con = mysqli_connect($serverName,$username,$password,$dbName);
  
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
    mysql_select_db("housewares_repairing");
    $strSQL = "SELECT * FROM users WHERE UsersID = '".$_SESSION['id']."' ";
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
  <title>Final Project</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="cus_home.php">Housewares Repairing </a>
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
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
      <li class="nav-item dropdown no-arrow active">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw  "></i>&nbsp;&nbsp;<?php echo $objResult["Name"]; ?></span> 
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">ตั้งค่า</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">ออกจากระะบบ</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin_home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>หน้าแรก</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="repair_reporting.php">
          <i class="fas fa-fw fa-users"></i>
          <span>ข้อมูลการแจ้งซ่อม</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_info.php">
          <i class="fas fa-fw fa-users"></i>
          <span>My Profile</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>การเข้าสู่ระบบ</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">หน้าจอเข้าสู่ระบบ:</h6>
          <a class="dropdown-item" href="login.php">เข้าสู่ระบบ</a>
          <a class="dropdown-item" href="#">ลืมรหัสผ่าน</a>
          <div class="dropdown-divider"></div>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" class="dropdown-item" data-toggle="modal"
          data-target="#logoutModal">
          <i class="fas fa-fw fa-times "></i>
          <span>ออกจากระบบ</span></a>
      </li>
    </ul>
    </nav>
      <div id="content-wrapper">
      <div class="container-fluid">
<!-- Breadcrumbs--><br>
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin_home.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
  <!-- /#wrapper -->
  <?php

$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("housewares_repairing");
$strSQL = "SELECT * FROM infor_repairing ";  
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>


<br>
 <div class="card-header"><i class="fas fa-table"></i>รายการการแจ้งซ่อม </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>
                    <div align="center">#</div>
                  </th>
                  <th>
                    <div align="center">ชื่ออุปกรณ์ </div>
                  </th>
                  <th>
                    <div align="center">อุปกรณ์เสียหาย</div>
                  </th>
                  <th>
                    <div align="center">วันที่</div>
                  </th>
                  <th>
                    <div align="center">เวลา</div>
                  </th>
                  <th>
                    <div align="center">สถานะงาน</div>
                  </th>
                </tr>

                 <?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
                       </thead>
              </div> 
        <tr>
        <td>

         <div align="center"><?php echo $objResult["id_infor"];?></td>
        <td><?php echo $objResult["equipment"];?></td>
        <td><?php echo $objResult["damage"];?></td>
        <td><?php echo $objResult["date"];?></td>
        <td><?php echo $objResult["time"];?></td>
        <td><?php echo $objResult["UsersID"];?></td>
        
    </td>
        <?php
}

?>
            </tr>
            </thead>
            </tbody>
            </table>
            
            <?php
  $strSQL = "SELECT * FROM users  WHERE UsersID='".$_SESSION["id"]."'";      
        ?>
            <?php
     if($result = $con->query($strSQL)){
     while($objResult = $result->fetch_object()){
            ?>
            <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
              <button onclick="document.getElementById('id22').style.display='block'"
                style="width:auto;">เพิ่มสินค้าส่งซ่อม</button>
              <div id="id22" class="modal">              
                  <form class="navbar-form from-group navbar-middle" method="post" action="save_addinforepair.php">
                    <div class="imgcontainer">
                      <div class="container">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel">เพิ่มใบส่งซ่อม/เคลม</h4>
                            </div>
                            <div class="modal-body">
                              <div class="form-group row">
                                <div class="col-md-5">
                                <label for="ID">รหัสการส่งซ่อม</label>
                                <input type="text" name="UsersID" id="UsersID" 
                                value="<?php echo $objResult->UsersID;?>"
                                  class="form-control"  autocomplete="on" readonly>
                              </div>                         
                              <div class="form-group">
                                <div class="col-md-20">
                                  <label for="name">ชื่อผู้ส่งซ่อม</label>
                                  <input type="text" name="username" id="username"
                                    value="<?php echo $objResult->Username;?>" 
                                    class="form-control" autocomplete="on" readonly>                                
                                </div>
                              </div>
                              <div class="modal-body">
                             <div class="form-group row">
                             <div class="col-md-10">
                                <label for="">รายการที่ส่งซ่อม</label>
                                <textarea name="equipment" id="equipment" class="form-control" required="required"></textarea>
                              </div>
                              <div class="modal-body">
                              <div class="form-group row">
                                <div class="col-md-10">
                                  <label for="">สาเหตุ</label>
                                  <textarea name="damage" id="damage" class="form-control" required="required"></textarea>
                                </div><div>
                                <div class="modal-body">
                                <div class="form-group row">
                                <div class="col-md-5">
                                  <label for="">วันที่</label>
                                  <input type="date" name="date" id="date" class="form-control" autocomplete="off" required="required">
                                </div>
                                <div class="form-group">
                                <div class="col-md-10">
                                <label for="time">เวลา</label>
                                <input type="text" name="time" id="time" class="form-control" autocomplete="off" required="required"> 
                                </div><div>
                            <div class="modal-footer">
                            <div class="col-md-10">
                              <button type="submit" name="save" class="btn btn-primary btn-sm">
                              <i class="fa fa-save fa-fw"></i>บันทึก</button>
                               <div>
                            </div>
                          <!-- /.modal-content -->         
                          <div>
                  </form>  
                  <?php
}}
?>
                </div>
              </div>
              <!-- /#wrapper -->
              <!-- Scroll to Top Button-->
              <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
              </a>
              <!-- Logout Modal-->
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">คุณพร้อมที่จะออกจากระบบ?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">เลือก "ออกจากระบบ" ข้างล่าง หากต้องการออกจากเซสชั่นนี้.</div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                      <a class="btn btn-primary" href="logouttechnician.php">ออกจากระบบ</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Sticky Footer -->
              <!-- <footer class="sticky-footer">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                    <span>Housewares Repairing, Create by Sunee & Ilham.</span>
                  </div>
                </div>
              </footer> -->
              <!-- Bootstrap core JavaScript-->
              <script src="vendor/jquery/jquery.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              <!-- Core plugin JavaScript-->
              <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
              <!-- Page level plugin JavaScript-->
              <script src="vendor/chart.js/Chart.min.js"></script>
              <script src="vendor/datatables/jquery.dataTables.js"></script>
              <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
              <!-- Custom scripts for all pages-->
              <script src="js/sb-admin.min.js"></script>
              <!-- Demo scripts for this page-->
              <script src="js/demo/datatables-demo.js"></script>
              <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>