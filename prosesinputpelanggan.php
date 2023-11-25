<?php
     include 'yaudahpelanggan.php';
    
            $idpel = $_POST['id_pelanggan'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_tlp = $_POST['no_telepon'];
           
          
            mysqli_query($hah,"INSERT INTO pelanggan VALUES ('$idpel','$nama','$alamat','$no_tlp')");
            header("location:pelanggan.php");       
?>
