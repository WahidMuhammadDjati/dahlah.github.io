<?php
include 'yaudahreservasi.php';

$hapus = $_GET['hapus'];
mysqli_query($hah, "DELETE FROM reservasi WHERE id_reservasi = '$hapus'");

header("location:reservasi.php");

?>