<?php
session_start();
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'angkasapura');
$data2= $_GET['id_berita'];
$hasil = mysqli_query($conn,"select * from berita where id_berita ='$data2'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Angkasa Pura Support </title>
<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Arbitrary a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Custom-Stylesheet-Links -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //Custom-Stylesheet-Links -->
<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->
 <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--gallery-->
<!--JS for animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	<!--//end-animate-->
</head>
<body>
<!-- Banner -->
	<div class="banner">
		<!-- Header -->
	<div class="header">
		<div class="container">
		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand wow fadeInLeft animated" data-wow-delay=".5s" href="index.php">Angkasa Pura Support</a>
				</div>

				<div class="navbar-collapse collapse hover-effect wow fadeInRight animated" data-wow-delay=".5s" id="navbar">
					<ul>
						<ul>
						<li><a href="index.php" class="active">HOME</a></li>
						<li><a href="about.html"><span data-hover="Profil">Profil</span></a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="services.html"><span data-hover="Unit">Unit</span></a>
							<ul class="dropdown-menu">
								<li><a href="unit1.php">Unit 1</a></li>
								<li><a href="#">Unit 2</a></li>
								<li><a href="#">Unit 3</a></li>
								<li><a href="#">Unit 4</a></li>
								<li><a href="#">Unit 5</a></li>
								<li><a href="#">Unit 6</a></li>
							</ul>
						</li>
						<li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="codes.html"><span data-hover="Fasilitas">fasilitas</span></a>
						<ul class="dropdown-menu">
								<li><a href="fasilitas1.php">Unit 1</a></li>
								<li><a href="#">Unit 2</a></li>
								<li><a href="#">Unit 3</a></li>
								<li><a href="#">Unit 4</a></li>
								<li><a href="#">Unit 5</a></li>
								<li><a href="#">Unit 6</a></li>
							</ul>
						</li>
						<li><a href="gallery.php"><span data-hover="News">News</span></a></li>
						<li><a href="pengumuman.php"><span data-hover="Annoucement">Annoucement</span></a></li>
						
						<li><a href="http://localhost/angkasa/index.php"><span data-hover="Login">Login</span></a></li>
					</ul>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->
		
	</div>
	</div>
	<div class="container">
			<div class="banner-info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="banner-info1">
									<h1></h1>
									<p></p>
								</div>
						</ul>
					</div>
				</section>
			
							<!-- FlexSlider -->
									  <script defer="" src="js/jquery.flexslider.js"></script>
									  <script type="text/javascript">
										$(function(){
										 
										});
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									  </script>
								<!-- FlexSlider -->
			</div>
		</div>


		</div>
	<!-- //Header -->
		<!-- //Banner -->
		<!-- gallery -->
<div class="about wthree-1">
				<div class="container">
					<div class="about-grids agile-1">
					<?php
							$data = mysqli_fetch_array($hasil);
					?>
					<div class="col-md-6 about-grid agileits-1">
					<div class="about-header">
					<h3><?php echo $data['tgl'];?></h3>
						</div>
							<div class="about-1">
						 <p><?php echo $data['deskrip_berit'];?></p>
					</div>
						</div>
					<div class="clearfix"> </div>
				</div>
					</div>
				</div>
		</div>	
</div>
	<!-- Footer -->
	<div class="footer">
			<div class="copyright animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<p>Ilkom Undana 2017 <a href="http://w3layouts.com/"> Angkasa Pura Support </a></p>
			</div>

		</div>
	</div>
	<!-- //Footer -->
	</body>
	</html>