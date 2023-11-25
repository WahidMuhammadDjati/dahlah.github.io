<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="reservasi.php">kembali</a>
<h2>Edit pelanggan</h2>

<?php
include 'yaudahreservasi.php';
$ubah = $_GET ['ubah'];
$data = mysqli_query($hah,"SELECT * FROM reservasi WHERE id_reservasi = $ubah ");
while ($tampil = mysqli_fetch_array($data)){
?>
    <form action="aksiubahreservasi.php" method="post">
    <table>
        <tr>
            <td width="40">ID RESERVASI :</td>
            <td>
                <input type="number" name = "id_reservasi" value="<?php echo $tampil['id_reservasi']?>">
            </td>
        </tr>
        <tr>
            <td width="60">ID PELANGGAN :</td>
            <td>
                <input type="number" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">ID KAMAR  :</td>
            <td>
                <input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">TANGGAL IN :</td>
            <td>
                <input type="date" name="tanggal_in" value="<?php echo $tampil['tanggal_in'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">TANGGAL OUT :</td>
            <td>
                <input type="date" name="tanggal_out" value="<?php echo $tampil['tanggal_out'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="simpan" value="Simpan">
            </td>
        </tr>
       
    </table>
    
    </form>

</body>
<?php
}
?>
</html>
