<?php
include '../koneksi.php';

$id_kegiatan = $_POST['id_kegiatan'];
$query = "DELETE FROM tb_kegiatan WHERE id_kegiatan = '$id_kegiatan'";
$exe = mysqli_query($conn, $query);
?>