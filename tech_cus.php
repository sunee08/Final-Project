<?php
  require_once("menu2.php"); 

	if(!isset($_SESSION['id']))
	{
    header ("location: login.php");
		exit();
  }
	//*** Get User Login
	$strSQL = "SELECT * FROM user WHERE UsersID = '".$_SESSION['id']."' ";
	$objQuery = mysqli_query($con,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
  
?>





<?include('connect.php');
$sql = "SELECT * FROM infor_repairing";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
    echo $result["infor_repairing"];
}
?>
<!DOCTYPE html>



<html>

<head>


  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="tech_home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="login.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>แจ้งซ่อม</span></a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_inforepairing2.php">
          <i class="fas fa-fw fa-users"></i>
          <span>เพิ่มรายงานการแจ้งซ่อม</span></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>ข้อมูลการรายงาน</span></a>
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
          <a class="dropdown-item" href="#">สมัครเข้าใช้งาน</a> 
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user-cog"></i>
          <span>ผู้ใช้งานระบบ</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" class="dropdown-item" href="#" data-toggle="modal"
          data-target="#logoutModal">
          <i class="fas fa-fw fa-times "></i>
          <span>ออกจากระบบ</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- DataTables Example -->
        <?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$Password = "";
	$dbName = "housewares_repairing";

	$conn = mysqli_connect($serverName,$username,$password,$dbName);

	$sql = "SELECT * FROM infor_repairing";

	$query = mysqli_query($conn,$sql);

?>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table </div>
          <div class="card-body">
            <div class="table-responsive" >
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>
                      <div align="center">ID </div>
                    </th>
                    <th>
                      <div align="center">Name </div>
                    </th>
                    <th>
                      <div align="center">Equipment </div>
                    </th>
                    <th>
                      <div align="center">Damage </div>
                    </th>
                    <th>
                      <div align="center">Status </div>
                    </th>
                  </tr>
                  </thead>
        </div>
        <?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
        <tr>
          <td>
            <div align="center"><?php echo $result["id_infor"];?>
          </td>
          <td><?php echo $result["name"];?></td>
          <td><?php echo $result["equipment"];?></td>
          <td><?php echo $result["damage"];?></div>
      </td>
      <td><?php echo $result["status"];?></td>
      <td>
        <a class="btn btn-info" href="edit_profilesupplier.php<?php echo '?id_infor= '.$result["id_infor"];?>">
          <i class="icon-pencil"></i>
        </a>
        <?php
}
?>
        </table>
        <?php
mysqli_close($conn);
?>
        </tr>
        </thead>
        </tbody>
        </table>
    </div>
  </div>
  <div class="card-footer small text-muted"></div>
  </div>
  </div>

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