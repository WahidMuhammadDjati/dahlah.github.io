<?php
include 'yaudahtagihan.php';

$hapus = $_GET['hapus'];
mysqli_query($hah, "DELETE FROM tagihan WHERE id_tagihan = '$hapus'");

header("location:tagihan.php");

?>