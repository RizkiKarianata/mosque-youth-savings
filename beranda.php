<?php
include 'koneksi.php';
if(!isset($_COOKIE["version"])) {
	header("location:keluar");
}else {
	$userid = $_COOKIE["version"];
	$sql = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE id_pengguna = '$userid'");
	$data = mysqli_fetch_array($sql);
}
$query3 = mysqli_query($conn, "SELECT SUM(nominal) AS kegiatan FROM tb_kegiatan");
$row3 = mysqli_fetch_array($query3);

$query4 = mysqli_query($conn, "SELECT SUM(nominal) AS tabungan FROM tb_tabungan");
$row4 = mysqli_fetch_array($query4);
$hasil =  $row4['tabungan'] - $row3['kegiatan'];
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
	<link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Halaman Utama</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item active">Halaman Utama</li>
								<li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-6">
							<div class="small-box bg-warning">
								<div class="inner">
									<?php
									$query = mysqli_query($conn, "SELECT COUNT(*) AS remaja FROM tb_remaja");
									$row = mysqli_fetch_array($query);
									?>
									<h3><?php echo $row['remaja'];?></h3>
									<p>Remaja</p>
								</div>
								<div class="icon">
									<i class="ion ion-person-add"></i>
								</div>
								<a href="remaja" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-6">
							<div class="small-box bg-danger">
								<div class="inner">
									<?php
									$query2 = mysqli_query($conn, "SELECT COUNT(*) AS tabungan FROM tb_tabungan");
									$row2 = mysqli_fetch_array($query2);
									?>
									<h3><?php echo $row2['tabungan'];?></h3>
									<p>Tabungan</p>
								</div>
								<div class="icon">
									<i class="ion ion-pie-graph"></i>
								</div>
								<a href="tabungan" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-warning">
								<div class="card-header">
									<h3 class="card-title">Rp. <?php echo number_format($hasil);?></h3>
								</div>
								<div class="card-body">
									<div class="chart">
										<canvas id="baruChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
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
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/chart.js/Chart.min.js"></script>
	<script src="assets/plugins/sparklines/sparkline.js"></script>
	<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
	<script src="assets/plugins/moment/moment.min.js"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
	<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="assets/dist/js/adminlte.js"></script>
	<script src="assets/dist/js/pages/dashboard.js"></script>
	<script src="assets/dist/js/demo.js"></script>
	<script>
		var areaChartData = {
			labels  : ['Pendapatan', 'Pengeluaran'],
			datasets: [
			{
				data                : [<?php echo $row4['tabungan'];?>, <?php echo $row3['kegiatan'];?>],
				backgroundColor     : ['#00a65a', '#f56954'],
			},
			]
		}
		var barChartCanvas = $('#baruChart').get(0).getContext('2d')
		var barChartData = jQuery.extend(true, {}, areaChartData)
		var temp1 = areaChartData.datasets[0]
		barChartData.datasets[0] = temp1
		var barChartOptions = {
			responsive              : true,
			maintainAspectRatio     : false,
			datasetFill             : false,
			legend: {
				display: false,
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			},
		}
		var barChart = new Chart(barChartCanvas, {
			type: 'bar', 
			data: barChartData,
			options: barChartOptions
		})		
	</script>
</body>
</html>