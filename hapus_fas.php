<?php 
	
	include 'koneksi.php';
	$id_fas=$_GET['id_fas'];
	$sql =mysql_query("DELETE FROM fasilitas where id_fas='$id_fas'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_fasilitas.php';
        </script>
        <?php
    }

 ?>