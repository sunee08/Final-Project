<?php
include('../db/connect.php');
session_start();
session_destroy();

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

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags-->
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font1/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.71/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select1/select1.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker1/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main1.css" rel="stylesheet" media="all">
</head>

<body {font-family: Arial, Helvetica, sans-serif;}>
  <form method="post" action="check_tech.php">
  <div class="page-wrapper bg-gra-00 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">ลงทะเบียน</h2>
                </div>
                <div class="card-body">
                  
                    <div class="form-row">
                            <div class="name">ชื่อ-สกุล</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="techUsername"Required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">ชื่อผู้ใช้</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="techName"Required>
                                            <label class="label--desc">ชื่อเต็ม</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="techPhone"Required>
                                            <label class="label--desc">เบอร์โทร</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">ที่อยู่</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="techAddress"Required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">อีเมล</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="techEmail"Required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">รหัสผ่าน</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="techPassword"Required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">ประเภทช่าง</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="techTypes" name="techTypes"Required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select class="form-control" name="techStatus" id="techStatus" hidden="">
                                    <option value="technician">Customer</option>
                                    </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">ลงทะเบียน</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

          <!-- <input type="submit" name="submit" value="Register Now!" a class="btn btn-primary btn-block"> -->

 
    <!-- Jquery JS-->
    <script src="vendor/jquery1/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select1/select1.min.js"></script>
    <script src="vendor/datepicker1/moment.min.js"></script>
    <script src="vendor/datepicker1/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body>

</html>