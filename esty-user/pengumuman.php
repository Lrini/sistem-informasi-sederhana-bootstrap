<!DOCTYPE html>
<html>
<head>
<title>Angkasa Pura Support</title>
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
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
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
					<a class="navbar-brand wow fadeInLeft animated" data-wow-delay=".5s" href="index.php">Angkasa Pura Support</a>
				</div>

				<div class="navbar-collapse collapse hover-effect" id="navbar">
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
						<li><a href="fasilitas1.php"><span data-hover="fasilitas">Fasilitas</span></a></li>
						<li><a href="gallery.php"><span data-hover="News">News</span></a></li>
						<li><a href="pengumuman.php"><span data-hover="Annoucement">Annoucement</span></a></li>
						<li><a href="contac.php"><span data-hover="Contac">contac</span></a></li>
						<li><a href="http://localhost/angkasa/index.php"><span data-hover="Login">Login</span></a></li>
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
	<div class="services wthree-4">
					<div class="container">
					<h1>Pengumuman</h1>
							<?php 
			include "koneksi.php";
			$halaman = 9;
			$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
			$result = mysqli_query($koneksi,"SELECT * FROM pengumuman");
			$total = mysqli_num_rows($result);
			$pages = ceil($total/$halaman);            
			$query = $koneksi->query("select * from pengumuman LIMIT $mulai, $halaman")or die(mysqli_error);
			$no =$mulai+1;
			 
			while ($data = $query->fetch_object()) { ?>
			<div class="view view-seventh">
				<div class="col-md-4 service-grid agile-4">
								<h4><?php echo $data->judul;?></h4>
								<p><?php echo $data->tanggal?></p>
								<div class="btn-group">
                    <a class="btn btn-primary" href="view_pengumuman.php?id_pengumuman=<?php echo $data->id_pengumuman; ?>"><i class="icon_plus_alt2"></i> Read More</a>
                 </div>
				</div>
                </div>
				<?php
			}
			?>
             
		<div class="row">
		<div class="col-md-12">
		<?php
		if($pages>1){ ?>
			<ul class="pager">
			  <?php for ($i=1; $i<=$pages ; $i++){ ?>	
				   <li class = "previous"><a href = "?halaman=<?php echo $i;?>">&larr; Previous</a></li>
				   <li class = "next"><a href = "?halaman=<?php echo $i;?>">Next &rarr;</a></li>
			  <?php } ?>
			</ul><?php 
		}
		else{ ?>
			<ul class="pager">
			  <?php for ($i=1; $i<=$pages ; $i++){ ?>	
				   <li class = "disabled previous"><a href = "?halaman=<?php echo $i;?>">&larr; Previous</a></li>
				   <li class = "disabled next"><a href = "?halaman=<?php echo $i;?>">Next &rarr;</a></li>
			  <?php } ?>
			</ul><?php
		}
		?>
							<div class="clearfix"></div>
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