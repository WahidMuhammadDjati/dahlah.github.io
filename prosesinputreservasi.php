<?php
     include 'yaudahreservasi.php';
    
            $idres = $_POST['id_reservasi'];
            $idpel = $_POST['id_pelanggan'];
            $idkamar = $_POST['id_kamar'];
            $in = $_POST['tanggal_in'];
            $out = $_POST['tanggal_out'];

           
          
            mysqli_query($hah,"INSERT INTO reservasi VALUES ('$idres','$idpel','$idkamar','$in','$out')");
            header("location:reservasi.php");       
?>
