<?php
include '../koneksi.php';
$sql = mysqli_query($conn, "SELECT SUM(nominal) AS keseluruhan FROM tb_tabungan");
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style type="text/css" media="print">
		@page {
			size: auto;
			margin: 0;
		}
	</style>
</head>
<body>
	<h2 align="center">Laporan Tabungan Per-Bulan</h2>
	<div class="row">
		<div class="col-lg-12">
			<div class="card" style="border: none;">
				<div class="card-body">
					<div class="table-responsive">
						<table border="1" class="table table-bordered">
							<thead>
								<tr>
									<th scope="col" style="text-align: center;">Bulan</th>
									<th scope="col" style="text-align: center;">Total Tabungan</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								$query = mysqli_query($conn, "SELECT created, SUM(nominal) AS total FROM tb_tabungan GROUP BY MONTH(created)");
								while($row = mysqli_fetch_array($query)) {
									?>
									<tr>
										<td align="center"><?php echo date('F Y', strtotime($row['created']));?></td>
										<td align="center">Rp. <?php echo number_format($row['total']);?></td>
									</tr>
								<?php } ?>
								<tr>
									<td align="center"><b>Total Keseluruhan</b></td>
									<td align="center"><b>Rp. <?php echo number_format($data['keseluruhan']);?></b></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">window.print()</script>
</body>
</html>