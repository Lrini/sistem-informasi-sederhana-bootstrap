<?php 
	
	include 'koneksi.php';
	$id_unit=$_GET['id_unit'];
	$sql =mysql_query("DELETE FROM unit where id_unit='$id_unit'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_unit.php';
        </script>
        <?php
    }

 ?>