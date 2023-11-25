<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservasi</title>
    <link rel="stylesheet" href="warnareservasi.css">
</head>
<body>
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
        <td>ID Reservasi </td>
        <td>ID pelanggan </td>
        <td>ID Kamar </td>
        <td>Tanggal IN </td>
        <td>Tanggal OUT </td>
        <td align="center">Apa Hayo</td>
    </tr>

<?php
    include 'yaudahreservasi.php';
    $data = mysqli_query($hah,"SELECT * from reservasi");
    while($tampil = mysqli_fetch_array($data)){
?>
    <tr>
        <td> <?php echo $tampil ['id_reservasi'] ?> </td>
        <td> <?php echo $tampil ['id_pelanggan'] ?> </td>
        <td> <?php echo $tampil ['id_kamar'] ?> </td>
        <td> <?php echo $tampil ['tanggal_in'] ?> </td>
        <td> <?php echo $tampil ['tanggal_out'] ?> </td>
        <td>
        <button><a href='ubahreservasi.php?ubah=<?php echo $tampil['id_reservasi']; ?>'onclick="return confirm('Yakin Ingin Mengubah Data?');">Ubah</a></button>
        <button><a href='hapusreservasi.php?hapus=<?php echo $tampil['id_reservasi']; ?>'onclick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a></button>
        </td>
      </tr>   
    
<?php
    }
?>
</table>
</div>
<a href="inputreservasi.php" class="tdreservasi">Tambahkan Data</a>
</body>
</html>