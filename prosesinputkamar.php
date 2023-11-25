<?php
     include 'yaudahkamar.php';
    
            $idkamar = $_POST['id_kamar'];
            $jenis = $_POST['jenis'];
            $harga = $_POST['harga'];
            $status = $_POST['status'];
           
          
            mysqli_query($hah,"INSERT INTO kamar VALUES ('$idkamar','$jenis','$harga','$status')");
            header("location:kamar.php");       
?>
