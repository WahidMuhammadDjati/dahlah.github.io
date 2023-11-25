<?php
include 'yaudahreservasi.php';

$idr = $_POST['id_reservasi'];
$idp = $_POST['id_pelanggan'];
$idk = $_POST['id_kamar'];
$tgl_in = $_POST['tanggal_in'];
$tgl_out = $_POST['tanggal_out'];

mysqli_query($hah,"UPDATE reservasi SET id_reservasi = '$idr', id_pelanggan = '$idp', id_kamar = '$idk', tanggal_in = '$tgl_in', tanggal_out = '$tgl_out' WHERE id_reservasi = '$idr'" );
header("location:reservasi.php");

?>