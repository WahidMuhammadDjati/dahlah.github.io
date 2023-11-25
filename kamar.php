<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="warnakamar.css">
</head>
<div class="body">
        <div class="divnav">
            <ul class="ulnav">
                <li class="linav">
                    <a href="http://localhost/YAUDAHTUGAS/realdasbor/apa.html" class="anav">APA,HOME?</a>
                </li>
                <li class="linav">
                    <a href="http://localhost/YAUDAHTUGAS/dasbor/kamar/kamar.php" class="anav">KAMAR</a>
                </li>
                <li class="linav">
                    <a href="http://localhost/YAUDAHTUGAS/dasbor/pelanggan/pelanggan.php" class="anav">PELANGGAN</a>
                </li>
                <li class="linav">
                    <a href="http://localhost/YAUDAHTUGAS/dasbor/reservasi/reservasi.php" class="anav">RESERVASI</a>
                </li>
                <li class="linav">
                    <a href="http://localhost/YAUDAHTUGAS/dasbor/tagihan/tagihan.php" class="anav">TAGIHAN</a>
                </li>
            </ul>
        </div>
<div class="yaudah">
<table border = "1" bgcolor="darkcyan" width="50%" height="160px" class="table">
    <tr>
        <td>ID Kamar  </td>
        <td>Jenis Kamar  </td>
        <td>Harga Kamar  </td>
        <td>Status  </td>
        <td align="center">Apa Hayo</td>
    </tr>
    
<?php
    include 'yaudahkamar.php';
    $data = mysqli_query($hah,"SELECT * from kamar");
    while($tampil = mysqli_fetch_array($data)){
?>
    <tr>
        <td> <?php echo $tampil ['id_kamar'] ?> </td>
        <td> <?php echo $tampil ['jenis'] ?> </td>
        <td> <?php echo $tampil ['harga'] ?> </td>
        <td> <?php echo $tampil ['status'] ?> </td>
        <td>
        <button><a href='ubahkamar.php?ubah=<?php echo $tampil['id_kamar']; ?>'onclick="return confirm('Yakin Ingin Mengubah Data?');">Ubah</a></button>
        <button><a href='hapuskamar.php?hapus=<?php echo $tampil['id_kamar']; ?>'onclick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a></button>
        </td>
      </tr>   
    
<?php
    }
?>
</table>
</div>
<a href="inputkamar.php" class="tdkamar">Tambahkan Data</a>
</div>
</body>
</html>