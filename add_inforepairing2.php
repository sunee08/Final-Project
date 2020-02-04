<?php
	session_start();
  require_once("connect.php");
  
  //mysql_connect("localhost","root","");
	//mysql_select_db("mydatabase");

	// if(!isset($_SESSION['id']))
	// {
  //   header ("location: technicianlogin.php");
	// 	exit();
  // }
	
	//*** Update Last Stay in Login System
	//$sql = "UPDATE member SET LastUpdate = NOW() WHERE UserID = '".$_SESSION["UserID"]."' ";
	//$query = mysqli_query($con,$sql);

	//*** Get User Login
	// $strSQL = "SELECT * FROM tecnicain WHERE id = '".$_SESSION['id']."' ";
	// $objQuery = mysqli_query($con,$strSQL);
  // $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
  //include('Config.php');
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

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Housewares Repairing</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">


  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Housewares Repairing </a>
     

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
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
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
      <span>Dashboard</span>
    </a>
</li>
    </ul>
<div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">ส่งซ่อมสินค้า</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            เพิ่มการส่งซ่อม</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <body id="page-top">
<form action="save_addinforepair2.php" name="add" method="post">
              <tbody>
      <tr>
        <td width="125"> &nbsp;</td>
        <td width="180">
          <input name="" type="text" id="" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Email</td>
        <td><input name="txtEmail" type="text" id="txtEmail">
        </td>
        </tr>
      <tr>
        <td> &nbsp;Address</td>
        <td><input name="txtAddress" type="text" id="txtAddress">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Phone</td>
        <td><input name="txtPhone" type="text" id="txtPhone">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="text" id="txtPassword">
        </td>
      </tr>

    </tbody>
  </table>
  </table>
<br>
<input type="submit" name="Submit" value="Save">
</body>
<!-- /.container-fluid -->
 </div>
 <!-- /.content-wrapper -->
 </div>
  <!-- /#wrapper -->
</div>

  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Housewares Repairing, Create by Sunee & Ilham.</span>
      </div>
    </div>
  </footer>
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
