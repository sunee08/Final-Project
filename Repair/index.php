<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Housewares Repairing | Index</title>

	<!-- PLUGINS CSS STYLE -->
	<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<!-- Fancy Box -->
	<link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- FAVICON -->
	<link href="img/favicon.png" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!--login-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<!-- <link href="css/sb-admin.css" rel="stylesheet"> -->
</head>

<body class="body-wrapper">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg  navigation">
						<a class="navbar-brand" href="index.php">
							<img src="image/home/hero.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="#">Menu</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Menu</a>
								</li>
										<li class="nav-item">
									<a class="nav-link" href="#">Menu</a>
								</li>
										<!-- <li class="nav-item">
									<a class="nav-link" href="#">Menu</a>
								</li>
										<li class="nav-item">
									<a class="nav-link" href="#">Menu</a>
								</li>
								 -->
							
							

								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">
										Login <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="customer/login.php">Customer</a>
										<a class="dropdown-item" href="technicain/login.php">Technicain</a>
										<a class="dropdown-item" href="admin/login.php">Admin</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Register</a>
								</li>
							</ul>

						</div>
					</nav>
				</div>
	</section>
	<!--================================Hero Area=================================-->
	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Housware Repairing </h1>
						<p>Join the millions who help each other <br> everyday in local communities around the world
						</p>
						<div class="short-popular-category-list text-center">
							<h2>Popular Category</h2>
							<ul class="list-inline">

								<li class="list-inline-item">
									<a href=""><i class="fa fa-grav"></i> แจ้งซ่อม</a>
								</li>
								>
							</ul>
						</div>
					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<form action="#">
							<div class="row">
								<!-- Store Search -->
								<div class="col-lg-6 col-md-12">
									<div class="block d-flex">
										<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search"
											placeholder="Search for store">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="block d-flex">
										<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search"
											placeholder="Search for store">
										<!-- Search Button -->
										<button class="btn btn-main">SEARCH</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>
	<!--====================================Client Slider ====================================-->
	<!--============================Popular deals section====================-->
	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Ads</h2>
						<div class="card-body">
							<div class="product-ratings">
								<ul class="list-inline">
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!--=========================================All Category Section===========================================-->
	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h2>All Categories</h2>
						<p></p>
					</div>
					<div class="row">
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>
	<!--=============================Footer==============================-->
	<footer class="footer section section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
					<!-- About -->
					<div class="block about">
						<!-- footer logo -->
						<img src="images/24.png" alt="">
						<!-- description -->
						<p class="alt-color">This is my final project to be Graduated please give power to myself to
							more do workkkk inshaAllah</p>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 offset-lg-1 col-md-3">
					<div class="block">
						<h4>Site Pages</h4>
						<ul>
							<li><a href="#">Boston</a></li>
							<li><a href="#">How It works</a></li>
							<li><a href="#">Deals & Coupons</a></li>
							<li><a href="#">Articls & Tips</a></li>
							<li><a href="#">Terms of Services</a></li>
						</ul>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
					<div class="block">
						<h4>Admin Pages</h4>
						<ul>
							<li><a href="#">Boston</a></li>
							<li><a href="#">How It works</a></li>
							<li><a href="#">Deals & Coupons</a></li>
							<li><a href="#">Articls & Tips</a></li>
							<li><a href="#">Terms of Services</a></li>
						</ul>
					</div>
				</div>
				<!-- Promotion -->
				<div class="col-lg-4 col-md-7">
					<!-- App promotion -->
					<div class="block-2 app-promotion">
						<a href="">
							<!-- Icon -->
							<img src="images/footer/phone-icon.png" alt="mobile-icon">
						</a>
						<p>Get the Dealsy Mobile App and Save more</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12">
					<!-- Copyright -->
					<div class="copyright">
						<p>Final Project 2019</p>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<!-- Social Icons -->
					<ul class="social-media-icons text-right">
						<li><a class="fa fa-facebook" href="https://www.facebook.com/unknown.now08"></a></li>
						<li><a class="fa fa-twitter" href=""></a></li>
						<li><a class="fa fa-line" href=""></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Container End -->
		<!-- To Top -->
		<div class="top-to">
			<a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
		</div>
	</footer>
	<script>
		// Get the modal
		var modal = document.getElementById('id01');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function (event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
	<!-- JAVASCRIPTS -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="plugins/tether/js/tether.min.js"></script>
	<script src="plugins/raty/jquery.raty-fa.js"></script>
	<script src="plugins/bootstrap/dist/js/popper.min.js"></script>
	<script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
	<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="js/scripts.js"></script>
</body>

</html>