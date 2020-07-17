<?php
include '../koneksi.php';

$id_remaja = $_POST['id_remaja'];
$query = "DELETE FROM tb_remaja WHERE id_remaja = '$id_remaja'";
$exe = mysqli_query($conn, $query);
?>