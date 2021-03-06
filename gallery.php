<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Arbitrary a Corporate Category Flat Bootstrap Responsive Website Template | Gallery :: W3layouts</title>
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
	<link rel="stylesheet" href="css/swipebox.css">
<!-- //Custom-Stylesheet-Links -->
<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->
 <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--gallery-->
</head>
<body>
<!-- Banner -->
	<div class="banner-1">
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
					<a class="navbar-brand" href="index.html">Arbitrary</a>
				</div>

				<div class="navbar-collapse collapse hover-effect" id="navbar">
					<ul>
						<li><a href="index.html"><span data-hover="HOME">HOME</span></a></li>
						<li><a href="about.html"><span data-hover="ABOUT">ABOUT</span></a></li>
						<li><a href="services.html"><span data-hover="SERVICES">SERVICES</span></a></li>
						<li><a href="codes.html"><span data-hover="CODES">CODES</span></a></li>
						<li><a href="gallery.html" class="active">GALLERY</a></li>
						<li><a href="contact.html"><span data-hover="CONTACT">CONTACT</span></a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->
		
	</div>
	</div>
		</div>
	<!-- //Header -->
		<!-- //Banner -->
		<!-- gallery -->
	<div class="gallery wthree-3">
	<div class="container">
		<h1>Gallery</h1> 
			
			<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
			</script>
			
			<?php 
			include "koneksi.php";
			$halaman = 9;
			$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
			$result = mysqli_query($koneksi,"SELECT * FROM berita");
			$total = mysqli_num_rows($result);
			$pages = ceil($total/$halaman);            
			$query = $koneksi->query("select * from berita LIMIT $mulai, $halaman")or die(mysqli_error);
			$no =$mulai+1;
			 
			while ($data = $query->fetch_object()) { ?>
			
				<div class="view view-seventh">
                    <a href="galeri-detail.php?id=<?php echo $data->id_berita?>" class="b-link-stripe b-animate-go  swipebox" title="Image Title"><img src="source/images/berita/<?php echo $data->foto_ber; ?>" alt="" class="img-responsive">
                    <div class="mask">
                       <h2><?php echo $data->tgl;?></h2>
                        <p><?php echo "".substr(strip_tags($data->deskrip_berit),0,100)."..."?></p>
                        
                    </div></a>
                </div>
				<?php
			}
			?>
              
				<div class="clearfix"></div>
	</div>
</div>
	<!-- //gallery -->
	<!-- Footer -->
	<div class="footer">
		<div class="container">

			<div class="footer-info">
				<div class="col-md-3 col-sm-3 footer-info-grid newsletter">
					<h4>NEWSLETTER</h4>
					<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>

					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email...">
						<input type="submit" class="submit" value="">
					</form>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid address">
					<h4>ADDRESS</h4>
					<address>
						<ul>
							<li>Quis autem vel</li>
							<li>Sydney, Australia</li>
							<li>Telephone : +2 (354) 456-78950</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">info@example.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid links">
					<h4>Flickr Posts</h4>
					<ul>
						<li><img src="images/1.jpg" class="img-responsive" alt=" "></li>
						<li><img src="images/2.jpg" class="img-responsive" alt=" "></li>
						<li><img src="images/3.jpg" class="img-responsive" alt=" "></li>
						<li><img src="images/4.jpg" class="img-responsive" alt=" "></li>
						<li><img src="images/5.jpg" class="img-responsive" alt=" "></li>
						<li><img src="images/6.jpg" class="img-responsive" alt=" "></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid social">
					<h4>Follow Us</h4>
					<ul>
						<li><a href="#"><span class="fa"> </span></a></li>
						<li><a href="#"><span class="tw"> </span></a></li>
						<li><a href="#"><span class="g"> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="copyright">
				<p>&copy; 2016 Arbitrary . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
			</div>

		</div>
	</div>
	<!-- //Footer -->
	</body>
	</html>