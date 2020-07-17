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
	<link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href=""><b>Sunan</b>Kalijogo</a>
		</div>
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">
					<?php
					date_default_timezone_set('Asia/Jakarta');
					$time = time();
					$hour = date("G", $time);

					if($hour >= 0 && $hour <= 10) {
						echo "Selamat Pagi";
					}else if($hour >= 11 && $hour <= 14) {
						echo "Selamat Siang";
					}else if($hour >= 15 && $hour <= 17) {
						echo "Selamat Sore";
					}else if($hour >= 18 && $hour <= 24) {
						echo "Selamat Malam";
					}else {
						echo "Selamat Datang";
					}
					?>
				</p>
				<form action="" method="POST">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Nama Pengguna" name="username" id="username" required="" pattern="[A-Za-z0-9]+" autocomplete="off">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Kata Sandi" name="password" id="password" required="" pattern="[A-Za-z0-9]+" autocomplete="off">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<input type="submit" name="submit" id="submit" value="Masuk" class="btn btn-primary btn-block">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script src="assets/plugins/toastr/toastr.min.js"></script>
	<script src="assets/dist/js/adminlte.min.js"></script>
	<?php
	include 'koneksi.php';
	if(isset($_POST['submit'])) {
		$username = mysqli_escape_string($conn, $_POST['username']);
		$password = mysqli_escape_string($conn, $_POST['password']);

		$query = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE BINARY username = '$username'");
		$cek = mysqli_num_rows($query);

		if($cek > 0) {
			$data = mysqli_fetch_array($query);
			$nama = $data['nama_lengkap'];
			$id_pengguna = $data['id_pengguna'];
			$username1 = $data['username'];
			if(password_verify($password, $data['password'])) {
				setcookie('version', $id_pengguna, time() + (60 * 60 * 24 * 5), '/');
				echo "<script>
				localStorage.setItem('id_pengguna', '$id_pengguna');
				localStorage.setItem('nama', '$nama');
				localStorage.setItem('username', '$username1'); 
				const Toast = Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 3000
				});
				Toast.fire({
					icon: 'success',
					title: '&nbsp;Selamat datang '+'$username1'+' di Aplikasi Sunan Kalijogo'
				}).then(function() {
					window.location.href='beranda'
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
					title: '&nbsp;Kata sandi yang Anda masukkan salah'
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
				title: '&nbsp;Nama pengguna serta kata sandi yang Anda masukkan tidak cocok'
			})
			</script>";
		}
	}
	?>
</body>
</html>