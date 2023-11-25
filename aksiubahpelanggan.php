<?php
include 'yaudahpelanggan.php';

$id = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_telepon'];

mysqli_query($hah,"UPDATE pelanggan SET id_pelanggan = '$id', nama = '$nama', alamat = '$alamat', no_telepon = '$no_tlp' WHERE id_pelanggan = '$id'" );
header("location:pelanggan.php");

?>