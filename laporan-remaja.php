<?php
include 'koneksi.php';
if(!isset($_COOKIE["version"])) {
	header("location:keluar");
}else {
	$userid = $_COOKIE["version"];
	$sql = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE id_pengguna = '$userid'");
	$data = mysqli_fetch_array($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sunan Kalijogo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/fav.png" type="image/png">
	<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.css">
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/plugins/sweet-alert2/dist/sweetalert2.min.css">
	<style type="text/css">
		@font-face {
			font-family: 'arabic';
			src: url(assets/dist/fonts/arabic-font.otf);
		}
		.arabic {
			font-family: 'arabic';
		}
	</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="beranda" class="brand-link">
				<img src="assets/images/fav.png" alt="NIFA Logo" class="brand-image img-circle elevation-3" style="opacity: .8; background-color: #FFFFFF;">
				<span class="brand-text font-weight-light">Sunan Kalijogo</span>
			</a>
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="assets/images/akun/<?php echo $data['gambar'];?>" class="img-circle elevation-2" alt="User Image" style="width: 35px; height: 35px;">
					</div>
					<div class="info">
						<a href="akun" class="d-block"><?php echo $data['nama_lengkap'];?></a>
					</div>
				</div>
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item has-treeview menu-open">
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Halaman Utama
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="beranda" class="nav-link active">
										<i class="far fa-circle nav-icon"></i>
										<p>Beranda</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-header">Menu</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Menu Utama
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right">3</span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="remaja" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Data Remaja</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="tabungan" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Data Tabungan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="kegiatan" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Data Kegiatan</p>
									</a>
								</li>	
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fa fa-print"></i>
								<p>
									Menu Laporan
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right">4</span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="laporan-minggu" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Per Minggu</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="laporan-bulan" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Per Bulan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="laporan-tahun" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Per Tahun</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="laporan-remaja" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Per Remaja</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-edit"></i>
								<p>
									Menu Tambahan
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right">1</span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="aktivitas" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Aktivitas</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="keluar" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p class="text">Keluar</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>
								<a href="Proses/cetak-laporan-remaja" class="btn btn-primary">Cetak Laporan</a>
							</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
								<li class="breadcrumb-item active">Per Remaja</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="row">
					<?php
					$no = 1;
					$query = mysqli_query($conn, "SELECT r.nama_lengkap, SUM(t.nominal) AS total FROM tb_tabungan t INNER JOIN tb_remaja r ON t.id_remaja = r.id_remaja GROUP BY t.id_remaja");
					while($row = mysqli_fetch_array($query)) {
						?>
						<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<h6 align="center"><?php echo $row['nama_lengkap'];?></h6>
								</div>
								<div class="card-body">
									<h3 align="center">Rp. <?php echo number_format($row['total']);?></h3>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>
		</div>
		<footer class="main-footer">
			<strong>Hak Cipta &copy; 2020 <a href="">Sunan Kalijogo</a></strong>
			<div class="float-right d-none d-sm-inline-block">
				<b>Versi</b> 1.0.0
			</div>
		</footer>
		<aside class="control-sidebar control-sidebar-dark"></aside>
	</div>
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.js"></script>
	<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script src="assets/plugins/toastr/toastr.min.js"></script>
	<script src="assets/dist/js/adminlte.min.js"></script>
	<script src="assets/dist/js/demo.js"></script>
	<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
	<script src="assets/plugins/sweet-alert2/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="assets/plugins/sweet-alert2/dist/sweetalert2.min.js"></script>
	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>
	<script>
		$(function () {
			$('.textarea').summernote()
		})
	</script>
</body>
</html>