<?php
include 'yaudahkamar.php';

$hapus = $_GET['hapus'];
mysqli_query($hah, "DELETE FROM kamar WHERE id_kamar = '$hapus'");

header("location:kamar.php");

?>