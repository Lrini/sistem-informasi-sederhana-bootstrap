<?php 
	
	include 'koneksi.php';
	$id_admin=$_GET['id_admin'];
	$sql =mysql_query("DELETE FROM admin where id_admin='$id_admin'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_admin.php';
        </script>
        <?php
    }

 ?>