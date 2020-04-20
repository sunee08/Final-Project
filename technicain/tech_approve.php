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
    }include('../db/connect.php');
  $strSQL = "SELECT * FROM technicain WHERE techID = '".$_SESSION['id']."' ";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
  }else{
    $_SESSION["timeLasetdActive"] = time();
  }
  //
   
?>
<!DOCTYPE html>



<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Housewares Repairing | Approve</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="admin_home.php"> Housewares Repairing </a>

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
          <span>&nbsp;รายการแจ้งซ่อม</span></a>

          <li class="nav-item ">
        <a class="nav-link" href="smwork.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>&nbsp; รายการซ่อมเสร็จ</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="infor_approval_view.php">
          <i class="fas fa-fw fa-file"></i>
          <span>&nbsp; รายการแจ้งซ่อมทั้งหมด</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reciept_tech.php">
          <i class="fas fa-fw fa-check"></i>
          <span>&nbsp;สถานะการเงิน</span></a>
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
<!-- Breadcrumbs-->
<br>
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin_home.php">หน้าแรก</a>
          </li>
          <li class="breadcrumb-item active">การยืนยัน</li>
        </ol>

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

    $strSQL = "SELECT infor_inform.*,customers.cusName,customers.cusPhone,customers.cusAddress
    ,infor_inform.descrip,infor_inform.hdate,infor_inform.ntime,infor_inform.main,infor_inform.sub,infor_inform.status,infor_inform.cusID
    ,infor_inform.id,infor_inform.techID
    
    FROM infor_inform

    LEFT JOIN customers ON customers.cusID = infor_inform.cusID 
    LEFT JOIN technicain ON technicain.techID = infor_inform.techID 

    WHERE infor_inform.cusID  AND  infor_inform.techID = '0' ORDER BY cusName AND infor_inform.status = 'กำลังดำเนินการ'  ";

    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    ?>
  <div id="wrapper">
          <div id="content-wrapper">
            <div class="container-fluid">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-table"></i> &nbsp; ข้อมูลลูกค้า </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr style="font-weight:bold; color:#040404; text-align:center; background:#f7f8f8;">
                            <th>
                              <div align="center">เลขที่</div>
                            </th>
                            <th>
                              <div align="center">ชื่อ</div>
                            </th>  
                            <th>
                              <div align="center">เวลาที่แจ้ง</div>
                            </th>
                            <th>
                              <div align="center">ประเภท</div>
                            </th>
                            <th>
                              <div align="center">รายการที่ส่งซ่อม</div>
                            </th>
                            <th>
                              <div align="center">หมายเหตุ</div>
                            </th>
                            <th>
                              <div align="center">วันที่สะดวก</div>
                            </th>
                             <th>
                              <div align="center">เวลาที่สะดวก</div>
                            </th>
                            <th>
                              <div align="center">สถานะ<div>
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
                      
                      <td> <div align="center"><?php echo $objResult["id"];?></td>
                      <td align="center"><?php echo $objResult["cusName"];?></td>
                      <td><?php echo $objResult["date"];?></td>
                      <td><?php echo $objResult["main"];?></td>
                      <td><?php echo $objResult["sub"];?></td>
                      <td><?php echo $objResult["descrip"];?></td>
                      <td align="center"><?php echo $objResult["hdate"];?></td>
                      <td align="center"><?php echo $objResult["ntime"];?></td>
                      <td align="center"><a class="btn btn-success" href="check_approve.php?id=<?php echo $objResult['id']; ?>" 
                       title="Comfirm" onclick="return confirm_accept('<?php echo $objResult['cusName']; ?>')">ยอมรับ</a> &nbsp;&nbsp;
                       <a class="btn btn-danger" href="JavaScript:if(confirm('Confirm Delete?')==true)
                        {window.location='delete_infotech.php?del=<?php echo $objResult["techID"];?>';}" >ลบ</a></td>
                      </td>
                  </div>
                </div>
              </div>
              </td>
              </tr>
              <?php       
                 }
                 ?>
              </tbody>
              </table>
  
  
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