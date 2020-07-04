

<?php

$success = 0;
if (isset($_GET['success'])) {
    $success = $_GET['success'];
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
      <?php if ($success == 1): ?>
        <div class="alert alert-success" role="alert">
          <i class="glyphicon glyphicon-ok"></i> Register Successful! Please wait confirmation by Administrator <a href="../index.php">Back to Homepage</a>
        </div>
        <?php endif;?>

  <form id="add" name="add" method="post" action="checkregis.php" enctype="multipart/form-data" onsubmit="return checkForm()"  > 

   <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="ชื่อ นามสกุล" name="fullname" id="fullname">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

    <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="username" id="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="อีเมล์" id="email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">  
         เพศ: &nbsp;&nbsp; &nbsp;&nbsp;<label class="radio-inline"> <input type="radio" name="gender"
                  value="ชาย" required aria-describedby="basic-addon1"> &nbsp;&nbsp; ชาย</label>
              &nbsp;&nbsp; &nbsp;&nbsp; <label class="radio-inline"><input type="radio" name="gender"
                  value="หญิง" aria-describedby="basic-addon1">
                &nbsp;&nbsp; หญิง</label>
      </div>
    
     <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" id="tel" name="tel">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

<div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="รหัสผ่าน" id="password" name="password">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


 <div class="form-group has-feedback">
        <input type="hidden"  id="status" name="status" value="teacher">
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ลงทะเบียน</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.php" class="text-center">ลงชื่อเข้าใช้</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
