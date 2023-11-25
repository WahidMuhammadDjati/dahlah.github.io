<?php
include 'yaudahkamar.php';

$id = $_POST['id_kamar'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$status = $_POST['status'];

mysqli_query($hah,"UPDATE kamar SET id_kamar = '$id', jenis = '$jenis', harga = '$harga', status = '$status' WHERE id_kamar = '$id'" );
header("location:kamar.php");

?>