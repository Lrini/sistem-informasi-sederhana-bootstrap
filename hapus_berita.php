<?php 
	
	include 'koneksi.php';
	$id_berita=$_GET['id_berita'];
	$sql =mysql_query("DELETE FROM berita where id_berita='$id_berita'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_berita.php';
        </script>
        <?php
    }

 ?>