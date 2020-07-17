<?php
include 'koneksi.php';
if(!isset($_COOKIE["version"])) {
	header("location:keluar");
}else {
	$userid = $_COOKIE["version"];
	$sql = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE id_pengguna = '$userid'");
	$data = mysqli_fetch_array($sql);
}
$query2 = mysqli_query($conn, "SELECT SUM(nominal) AS kegiatan FROM tb_kegiatan");
$row2 = mysqli_fetch_array($query2);

$query3 = mysqli_query($conn, "SELECT SUM(nominal) AS tabungan FROM tb_tabungan");
$row3 = mysqli_fetch_array($query3);
// $hasil =  $row2['tabungan'] - $row4['kegiatan'];

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
							<h1>Rp. <?php echo number_format($row2['kegiatan']);?></h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
								<li class="breadcrumb-item active">Tabungan</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Tambah</button>
									<a href="Proses/cetak-laporan-kegiatan" class="btn btn-primary">Cetak</a>
								</h3>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Nominal</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											$query = "SELECT * FROM tb_kegiatan ORDER BY id_kegiatan ASC";
											$exe = mysqli_query($conn, $query);
											while($row = mysqli_fetch_array($exe)) {
												?>
												<tr>
													<td><?php echo $no++;?></td>
													<td><?php echo $row['nama'];?></td>
													<td><?php echo number_format($row['nominal']);?></td>
													<td>
														<button id="detail-kegiatan" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-detail" data-id="<?php echo $row['id_kegiatan'];?>" data-nama="<?php echo $row['nama'];?>" data-nominal="<?php echo $row['nominal'];?>">Detail</button>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="modal fade" id="modal-detail">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title header-title"></h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="" method="POST" enctype="multipart/form-data" class="data-edit">
							<div class="modal-body" id="modal-edit">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="id_remaja">Nama Kegiatan</label>
											<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kegiatan" required="" autocomplete="off">
											<input type="hidden" name="id_kegiatan" id="id_kegiatan">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="nominal">Nominal</label>
											<input type="number" name="nominal" id="nominal" class="form-control" placeholder="Nominal" required="" autocomplete="off">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-danger tombol-hapus">Hapus</button>
								<input type="submit" class="btn btn-success" name="submitupdate" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-tambah">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="id_remaja">Nama Kegiatan</label>
											<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kegiatan" required="" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="nominal">Nominal</label>
											<input type="number" name="nominal" id="nominal" class="form-control" placeholder="Nominal" required="" autocomplete="off" min="500" max="<?php echo $row3['tabungan'];?>">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
								<input type="submit" class="btn btn-success" name="submitadd" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
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
	<script>
		$(document).on("click", "#detail-kegiatan", function() {
			var idkegiatan = $(this).data('id');
			var namakegiatan = $(this).data('nama');
			var nominalkegiatan = $(this).data('nominal');
			$("#modal-edit #id_kegiatan").val(idkegiatan);
			$("#modal-edit #nominal").val(nominalkegiatan);
			$("#modal-edit #nama").val(namakegiatan);
			$(".header-title").text("Info Kegiatan");
		})
	</script>
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$(".tombol-hapus").click(function() {
				var data = $('.data-edit').serialize();
				Swal.fire({
					title: 'Apakah Anda yakin ?',
					text: 'Data yang Anda hapus tidak bisa di kembalikan lagi',
					icon: 'warning',
					allowOutsideClick: false,
					allowEscapeKey: false,
					allowEnterKey: false,
					showCancelButton: true,
					cancelButtonColor: '#d33',
					confirmButtonColor: '#3085d6',
					cancelButtonText: 'Jangan',
					confirmButtonText: 'Ya, hapus saja!'
				}).then((result) => {
					if(result.value) {
						$.ajax({
							type: 'POST',
							url: "Proses/hapus-kegiatan",
							data: data,
							success: function() {
								window.location.href='kegiatan';
							}
						});
					}
				});
			});
		});
	</script>
	<?php
	include 'koneksi.php';
	if(isset($_POST['submitadd'])) {
		date_default_timezone_set('Asia/Jakarta');

		$nominal = $_POST['nominal'];
		$nama = $_POST['nama'];
		$created = date("Y-m-d H:i:s");
		$modified = date("Y-m-d H:i:s");

		$query = "INSERT INTO tb_kegiatan(nama, nominal, created, modified) VALUES ('$nama', '$nominal', '$created', '$modified')";
		$exe = mysqli_query($conn, $query);

		if($exe) {
			echo "<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				icon: 'success',
				title: 'Berhasil menambah data'
			}).then(function() {
				window.location.href='kegiatan'
			});
			</script>";		
		}else {
			echo "<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				icon: 'error',
				title: 'Gagal menambah data'
			})
			</script>";		
		}
	}
	if(isset($_POST['submitupdate'])) {
		date_default_timezone_set('Asia/Jakarta');

		$id_kegiatan = $_POST['id_kegiatan'];
		$nama = $_POST['nama'];
		$nominal = $_POST['nominal'];
		$modified = date("Y-m-d H:i:s");

		$query = "UPDATE tb_kegiatan SET nama = '$nama', nominal = '$nominal', modified = '$modified' WHERE id_kegiatan = '$id_kegiatan'";
		$exe = mysqli_query($conn, $query);

		if($exe) {
			echo "<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				icon: 'success',
				title: 'Berhasil mengubah data'
			}).then(function() {
				window.location.href='kegiatan'
			});
			</script>";		
		}else {
			echo "<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				icon: 'error',
				title: 'Gagal mengubah data'
			})
			</script>";		
		}
	}
	?>
</body>
</html>