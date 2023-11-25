<?php
     include 'yaudahtagihan.php';
    
            $idt = $_POST['id_tagihan'];
            $idres = $_POST['id_reservasi'];
            $totalb = $_POST['total_biaya'];
            $statusp = $_POST['status_pembayaran'];


           
          
            mysqli_query($hah,"INSERT INTO tagihan VALUES ('$idt','$idres','$totalb','$statusp')");
            header("location:tagihan.php");       
?>
