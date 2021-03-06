<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!--cek editor-->
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="ckeditor/contents.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		<!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Angkasa Pura </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/logo.png" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
				<span>
					 <?php 
                                        include 'koneksi.php';
                                        echo $_SESSION['nama_admin'];

                                 ?>
                            </span>
                  <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="#"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Angkasa Pura Support</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
		 <a href="index.html">
            <i class=""></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Tabel</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tabel_unit.php"><i class="fa fa-circle-o"></i> Unit</a></li>
            <li><a href="tabel_fasilitas.php"><i class="fa fa-circle-o"></i> Fasilitas</a></li>
            <li><a href="tabel_berita.php"><i class="fa fa-circle-o"></i> Berita</a></li>
            <li><a href="tabel_pengumuman.php"><i class="fa fa-circle-o"></i>Pengumuman</a></li>
			 <li><a href="tabel_admin.php"><i class="fa fa-circle-o"></i>Admin</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Form</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="unit.php"><i class="fa fa-circle-o"></i>Fasilitas</a></li>
            <li><a href="fasilitas.php"><i class="fa fa-circle-o"></i>Unit</a></li>
            <li><a href="berita.php"><i class="fa fa-circle-o"></i> Berita</a></li>
            <li><a href="pengumuman.php"><i class="fa fa-circle-o"></i>Pengumuman</a></li>
			<li><a href="admin.php"><i class="fa fa-circle-o"></i>Admin</a></li>
          </ul>
        </li>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class=""></i></a></li>
        <li class="active"></li>
      </ol>
    </section>
	<!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Fasilitas</h3>
			 </div>
			 <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
			  <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" name="file">

                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Fasilitas</label>
                  <input type="text" class="form-control" id="nama_fas" name="nama_fas"/>
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
					<textarea name="deskripsi" id="news"></textarea>
						<script type="text/javascript">
								var editor = CKEDITOR.replace('news');  
						</script>
                </div>
				 <div class="form-group">
                  <label>Unit</label>
					<?php
						include "koneksi.php";
						$query = "select * from unit ";
						$result = mysql_query($query);
					?>
                  <select name= "id_unit" id="id_unit" class="form-control" type="text">
                    <option>Unit</option>
					<?php while ($data = mysql_fetch_array($result)) 
													{ ?>
											 <option value='<?php echo $data['id_unit'] ?>'><?php echo $data['id_unit'] ?> | <?php echo $data['nama_unit'] ?></option>
											 <?php } ?>
                  </select>
                </div>
              </div>
        <!-- /.box-body -->
		 <div class="box-footer">
                <button type="submit" class="btn btn-primary fa fa-download" name="simpan" value="SIMPAN" >Submit</button>
              </div>
            </form>
			  <?php 

    include 'koneksi.php';
    if(isset($_POST['simpan'])){
    if(!empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error']==0)
    {
    $fileName=$_FILES['file']['name'];
    
    $movie=move_uploaded_file($_FILES['file']['tmp_name'],'foto/'.$fileName);
	$im_src = imagecreatefromjpeg('foto/'.$fileName);
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	//Set ukuran gambar hasil perubahan
	$dst_width = 600;
	$dst_height = 600;

	//proses perubahan ukuran
	$im = imagecreatetruecolor($dst_width,$dst_height);
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	//Simpan gambar
	imagejpeg($im,'foto/'.$fileName,100);

	//Hapus gambar di memori komputer
	imagedestroy($im_src);
	imagedestroy($im);
    if($movie){

        $nama_foto      =$_POST['nama_fas'];
		$deskripsi = $_POST['deskripsi'];
		$id_unit = $_POST ['id_unit'];
        $sql = mysql_query("INSERT INTO fasilitas (foto,nama_fas,deskripsi,id_unit)values ('$fileName','$nama_foto','$deskripsi','$id_unit')");

        if($sql){
          ?>
         <script type="text/javascript">
            alert("sukses");window.location='tabel_fasilitas.php'
        </script>
		<?php
    } else {
		?>
        <script type="text/javascript">
            alert("gagal");
        </script>
          <?php
        }
      }
      }


    }

   ?>
          </div>
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b> 
    </div>
    <strong>Copyright Angkasa Pura Support <a href="#">Ilmu Komputer</a>.</strong> 2017
    
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
