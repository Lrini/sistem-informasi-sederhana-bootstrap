<?php 
	
	include 'koneksi.php';
	$id_pengumuman=$_GET['id_pengumuman'];
	$sql =mysql_query("DELETE FROM pengumuman where id_pengumuman='$id_pengumuman'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_pengumuman.php';
        </script>
        <?php
    }

 ?>