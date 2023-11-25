<?php
include 'yaudahtagihan.php';

$idt = $_POST['id_tagihan'];
$idr = $_POST['id_reservasi'];
$total = $_POST['total_biaya'];
$status = $_POST['status_pembayaran'];

mysqli_query($hah,"UPDATE tagihan SET id_tagihan = '$idt', id_reservasi = '$idr', total_biaya = '$total', status_pembayaran = '$status' WHERE id_tagihan = '$idt'" );
header("location:tagihan.php");

?>