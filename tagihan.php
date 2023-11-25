<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tagihan</title>
    <link rel="stylesheet" href="warnatagihan.css">
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
        <td>ID Tagihan </td>
        <td>ID Reservasi </td>
        <td>Total Biaya </td>
        <td>Status Pembayaran </td>
        <td align="center">Apa Hayo</td>
    </tr>

<?php
    include 'yaudahtagihan.php';
    $data = mysqli_query($hah,"SELECT * from tagihan");
    while($tampil = mysqli_fetch_array($data)){
?>
    <tr>
        <td> <?php echo $tampil ['id_tagihan'] ?> </td>
        <td> <?php echo $tampil ['id_reservasi'] ?> </td>
        <td> <?php echo $tampil ['total_biaya'] ?> </td>
        <td> <?php echo $tampil ['status_pembayaran'] ?> </td>
        <td>
        <button><a href='ubahtagihan.php?ubah=<?php echo $tampil['id_tagihan']; ?>'onclick="return confirm('Yakin Ingin Mengubah Data?');">Ubah</a></button>
        <button><a href='hapustagihan.php?hapus=<?php echo $tampil['id_tagihan']; ?>'onclick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a></button>
        </td>
      </tr>   
    
<?php
    }
?>
</table>
</div>
<a href="inputtagihan.php" class="tdtagihan">Tambahkan Data</a>
</body>
</html>