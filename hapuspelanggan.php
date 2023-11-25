<?php
include 'yaudahpelanggan.php';

$hapus = $_GET['hapus'];
mysqli_query($hah, "DELETE FROM pelanggan WHERE id_pelanggan = '$hapus'");

header("location:pelanggan.php");

?>