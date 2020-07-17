<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NIFA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon.png" type="image/png">
	<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.css">
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">  
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
				<img src="assets/images/favicon.png" alt="NIFA Logo" class="brand-image img-circle elevation-3" style="opacity: .8; background-color: #FFFFFF;">
				<span class="brand-text font-weight-light">NIFA</span>
			</a>
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="assets/images/akun/Gambar1.jpeg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="akun" class="d-block">RizkiKarianata</a>
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
									<span class="badge badge-info right">4</span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="asmaul-husna" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Asmaul Husna</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="kisah-nabi" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Kisah Nabi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="artikel-berita" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Artikel Berita</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pusat-bantuan" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Pusat Bantuan</p>
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
									<span class="badge badge-info right">6</span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="doa" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Doa</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="wudhu" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Wudhu</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="sholat" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Sholat</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="puasa" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Puasa</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="zakat" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Zakat</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="haji" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Haji</p>
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
							<h1>Asmaul Husna</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
								<li class="breadcrumb-item active">Asmaul Husna</li>
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
								<h3 class="card-title"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Tambah</button></h3>
							</div>
							<div class="card-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = "SELECT * FROM tb_asmaulhusna ORDER BY id_asma ASC";
										$exe = mysqli_query($conn, $query);
										while($row = mysqli_fetch_array($exe)) {
											?>
											<tr>
												<td><?php echo $no++;?></td>
												<td><?php echo $row['nama'];?></td>
												<td>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-detail<?php echo $row['id_asma'];?>">Detail</button>
												</td>
											</tr>
			<div class="modal fade" id="modal-detail<?php echo $row['id_asma'];?>" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<?php
						$modalid = $row['id_asma'];
						$querymodal = mysqli_query($conn, "SELECT * FROM tb_asmaulhusna WHERE id_asma = '$modalid'");
						$datamodal = mysqli_fetch_array($querymodal);
						?>
						<div class="modal-header">
							<h4 class="modal-title arabic"><?php echo $datamodal['arab'];?></h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required="" autocomplete="off">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="arab">Arab</label>
											<input type="text" name="arab" id="arab" class="form-control" placeholder="Arab" required="" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="arti">Arti</label>
											<textarea class="textarea" rows="3" placeholder="Tuliskan Arti"></textarea>
										</div>
									</div>									
								</div>
							</form>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-danger">Hapus</button>
							<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
						</div>
					</div>
				</div>
			</div>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="modal fade" id="modal-tambah">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah<h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required="" autocomplete="off">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="arab">Arab</label>
											<input type="text" name="arab" id="arab" class="form-control" placeholder="Arab" required="" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="arti">Arti</label>
											<textarea class="textarea" rows="3" placeholder="Tuliskan Arti"></textarea>
										</div>
									</div>									
								</div>
							</form>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
							<button type="button" class="btn btn-success">Simpan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="main-footer">
			<strong>Hak Cipta &copy; 2020 <a href="">NIFA</a></strong>
			oleh Coretan Code
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