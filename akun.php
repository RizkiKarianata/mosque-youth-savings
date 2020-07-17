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
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
	<link rel="stylesheet" href="assets/plugins/sweet-alert2/dist/sweetalert2.min.css">
</head>
<body class="hold-transition sidebar-mini">
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
							<h1>Akun</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
								<li class="breadcrumb-item active">Akun</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<div class="card card-primary card-outline">
								<div class="card-body box-profile">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle"
										src="assets/images/akun/<?php echo $data['gambar'];?>" alt="Foto" style="width: 150px; height: 150px;">
									</div>
									<h3 class="profile-username text-center"><?php echo $data['nama_lengkap'];?></h3>
									<p class="text-muted text-center">Bergabung pada <?php echo date('d F Y H:i:s', strtotime($data['created']));?></p>
									<a href="https://api.whatsapp.com/send?phone=<?php echo '62'.ltrim($data['no_hp'],'0');?>" class="btn btn-primary btn-block" target="_blank"><b>Hubungi</b></a>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="card">
								<div class="card-header p-2">
									<ul class="nav nav-pills">
										<li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Data Diri</a></li>
									</ul>
								</div>
								<div class="card-body">
									<div class="tab-content">
										<div class="active tab-pane" id="settings">
											<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
												<div class="form-group row">
													<label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $data['nama_lengkap'];?>" required="" autocomplete="off">
													</div>
												</div>
												<div class="form-group row">
													<label for="username" class="col-sm-2 col-form-label">Pengguna</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna" value="<?php echo $data['username'];?>" required="" autocomplete="off">
													</div>
												</div>
												<div class="form-group row">
													<label for="password" class="col-sm-2 col-form-label">Sandi Baru</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Baru" autocomplete="off">
													</div>
												</div>
												<div class="form-group row">
													<label for="no_hp" class="col-sm-2 col-form-label">Telepon</label>
													<div class="col-sm-10">
														<input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon" value="<?php echo $data['no_hp'];?>" required="" autocomplete="off">
													</div>
												</div>
												<div class="form-group row">
													<label for="gambar" class="col-sm-2 col-form-label">Foto</label>
													<div class="col-sm-10">
														<div class="custom-file">
															<input type="file" name="gambar" id="gambar" class="custom-file-input">
															<label class="custom-file-label" for="customFile">Ganti Foto Profil</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<div class="offset-sm-2 col-sm-10">
														<button type="submit" name="submit" id="submit" class="btn btn-danger">Simpan</button>
													</div>
												</div>
											</form>
										</div>
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
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	<script src="assets/dist/js/adminlte.min.js"></script>
	<script src="assets/dist/js/demo.js"></script>
	<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script src="assets/plugins/toastr/toastr.min.js"></script>
	<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
	<script src="assets/plugins/sweet-alert2/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="assets/plugins/sweet-alert2/dist/sweetalert2.min.js"></script>
	<script>
		$(document).ready(function () {
			bsCustomFileInput.init();
		});
	</script>
	<?php
	if (isset($_POST['submit'])) {
		date_default_timezone_set('Asia/Jakarta');
		
		$nama_lengkap = $_POST['nama_lengkap'];
		$no_hp = $_POST['no_hp'];
		$username = $_POST['username'];
		// $gambar = $_FILES['gambar']['name'];
		// echo $gambar;

		if(empty($_POST['password']) && empty($_FILES['gambar']['name'])) {
			$query = mysqli_query($conn, "UPDATE tb_pengguna SET nama_lengkap = '$nama_lengkap', no_hp = '$no_hp', username = '$username' WHERE id_pengguna = '$userid'");
			if($query) {
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
						window.location.href='akun'
					});
				</script>";
			} else {
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
		} else if(!empty($_POST['password']) && !empty($_FILES['gambar']['name'])) {
			$password = $_POST['password'];
			$password_acak = password_hash($password, PASSWORD_DEFAULT);
			$gambar = $_FILES['gambar']['name'];
			move_uploaded_file($_FILES['gambar']['tmp_name'],"assets/images/akun/".$_FILES['gambar']['name']);

			$query = mysqli_query($conn, "UPDATE tb_pengguna SET nama_lengkap = '$nama_lengkap', no_hp = '$no_hp', username = '$username', password = '$password_acak', gambar = '$gambar' WHERE id_pengguna = '$userid'");
			if($query) {
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
						window.location.href='akun'
					});
				</script>";
			} else {
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
		} else {
			if(empty($_POST['password'])) {
				$gambar = $_FILES['gambar']['name'];
				move_uploaded_file($_FILES['gambar']['tmp_name'],"assets/images/akun/".$_FILES['gambar']['name']);

				$query = mysqli_query($conn, "UPDATE tb_pengguna SET nama_lengkap = '$nama_lengkap', no_hp = '$no_hp', username = '$username', gambar = '$gambar' WHERE id_pengguna = '$userid'");
				if($query) {
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
							window.location.href='akun'
						});
					</script>";
				} else {
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
			} else if(empty($_FILES['gambar']['name'])) {
				$password = $_POST['password'];
				$password_acak = password_hash($password, PASSWORD_DEFAULT);

				$query = mysqli_query($conn, "UPDATE tb_pengguna SET nama_lengkap = '$nama_lengkap', no_hp = '$no_hp', username = '$username', password = '$password_acak' WHERE id_pengguna = '$userid'");
				if($query) {
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
							window.location.href='akun'
						});
					</script>";
				} else {
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
			} else {
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
	}
	?>
</body>
</html>