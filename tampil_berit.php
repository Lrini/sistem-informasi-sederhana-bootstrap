<!DOCTYPE HTML>
<head>
<title>Business Core | Magazine</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<!-- JS Files -->
<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/slides/slides.min.jquery.js"></script>
<script src="js/cycle-slider/cycle.js"></script>
<script src="js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="js/tabify/jquery.tabify.js"></script>
<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<!--<script src="js/scrolltop/scrolltopcontrol.js"></script>-->
<script src="js/portfolio/filterable.js"></script>
<script src="js/modernizr/modernizr-2.0.3.js"></script>
<script src="js/easing/jquery.easing.1.3.js"></script>
<script src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="js/swfobject/swfobject.js"></script>
<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="all">
<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<div class="header">
  <div id="site_title"><a href="index1.php"><img src="img/logo.png" alt=""></a></div>
  <!-- Main Menu -->
  <ol id="menu">
    <li class="active_menu_item"><a href="index1.php">Home</a>
    </li>
    <!-- END sub menu -->
    <li><a href="#">Profil</a>
      <!-- sub menu -->
      <ol>
        <li><a href="magazine.html">Visi Dan Misi</a></li>
        <li><a href="blog.html">Mottto</a></li>
        <li><a href="full-width.html">Struktur Organisasi</a></li>
      </ol>
    </li>
    <!-- END sub menu -->
    <li><a href="#">Unit</a>
      <!-- sub menu -->
      <ol>
        <li><a href="gallery-simple.html">Simple</a></li>
        <li><a href="portfolio.html">Filterable</a></li>
        <li><a href="gallery-fader.html">Fade Scroll</a></li>
        <li><a href="video.html">Video</a></li>
        <li class="last"><a href="photogrid.html">PhotoGrid</a></li>
      </ol>
    </li>
	<li><a href="elements.html">Berita</a></li>
	<li><a href="elements.html">Pengumuman</a></li>
    <!-- END sub menu -->
    <li><a href="contact.html">Contact</a></li>
	<li><a href="contact.html">Login</a></li>
  </ol>
</div>
<div id="container">
  <h1>Berita </h1>
  <div class="one-third">
  <?php
								include "koneksi.php";
								$mysqli = new mysqli('127.0.0.1', 'root', '', 'angkasapura');

										if ($mysqli->connect_errno) {
											echo "Hell break lose";
										}
										//$data2 = $_GET['tanggal'];
										// echo 'data2 = ' . $data2;
										$qstr = "SELECT berita.foto_ber,berita.deskrip_berit,berita.tgl,berita.id_unit,berita.id_admin from berita";
										$result = $mysqli->query($qstr);

										// echo "Res = " . $result;
										if ($result && $result->num_rows !== 0) {
											for ($i = 0; $i < $result->num_rows; $i++) {
												$pengumuman = $result->fetch_array();
												//echo $pengumuman['foto'];
		echo 
    '<div class="heading_bg">'.
    '</div>'.
	 '<ul class="post_meta" style="margin:0">'.
   ' <a href= "foto/'.$pengumuman['foto_ber'].'">'.
     '<img class="img-responsive"  src="foto/'.$pengumuman['foto_ber'].'" alt="" widht="400" height ="300">'.
      '<li class="post_meta_admin"><a href="#">'.$pengumuman['id_admin'].'</a></li>'.
      '<li class="post_meta_date"><a href="#">'.$pengumuman['tgl'].'</a></li>'.
    '</ul>'.
    '<p>'.$pengumuman['deskrip_berit'].'</p>';
											}
										}
	?>
  </div>
  <div style="clear:both; height: 40px"></div>
</div>
<div id="footer">
</div>
</body>
</html>