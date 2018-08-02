<!DOCTYPE HTML>
<head>
<title>Angkasa Pura Support</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<!-- JS Files -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="js/jquery.tools.min.js"></script>
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
	<li><a href="tampil_berit.php">Berita</a></li>
	<li><a href="elements.html">Pengumuman</a></li>
    <!-- END sub menu -->
    <li><a href="contact.html">Contact</a></li>
	<li><a href="contact.html">Login</a></li>
  </ol>
</div>
<!-- END header -->
<div id="container">
  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      <div> <img src="img/banner.png" alt="">
        <h2>Welcome to Angkasa Pura Support</h2>
        <p>Angkasa Pura Supports adalah salah satu anak perusahaan dari PT. Angkasa Pura I (Persero) yang bergerak dibidang penyediaan barang dan/atau jasa secara umum dan secara khusus terutama kepada Perusahaan 
		Induk dalam rangka meningkatkan Quality Services Pengelolaan bandar udara yang modern.</p><p>Angkasa Pura Supports membidik segment pasar yang bersifat korporat  bukan retail dan terutama adalah yang bersifat mendukung atau mensupport
		kebutuhan perusahaan induk dalam memberikan pelayanan terbaik kepada penumpang ataupun pengunjung bandar udara di Indonesia.</p> <p>Perusahaan Angkasa Pura Supports bergerak di bidang usaha trading, 
		export-import, services, outsourcing, supplier dan financing untuk pengadaan barang dan/atau jasa yang dibutuhkan oleh perusahaan lain pada umumnya dan perusahaan induk pada khususnya.</p>
		<p>Angkasa Pura Supports membidik Segment Pasar yang bersifat korporat bukan retail dan terutama adalah mendukung atau mensupport kebutuhan perusahaan induk yaitu PT. Angkasa Pura I (Persero) dalam rangka 
		memberikan pelayanan terbaik kepada penumpang ataupun pengunjung bandar udara di Indonesia.</p>
      </div>
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
      <ul>
      </ul>
    </div>
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
</div>
<!-- END container -->
<div id="footer">
</div>
<!-- END footer -->
</body>
</html>