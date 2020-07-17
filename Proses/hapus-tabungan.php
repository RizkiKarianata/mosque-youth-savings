<?php
include '../koneksi.php';

$id_tabungan = $_POST['id_tabungan'];
$query = "DELETE FROM tb_tabungan WHERE id_tabungan = '$id_tabungan'";
$exe = mysqli_query($conn, $query);
?>