<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="pelanggan.php">kembali</a>
<h2>Edit pelanggan</h2>

<?php
include 'yaudahpelanggan.php';
$ubah = $_GET ['ubah'];
$data = mysqli_query($hah,"SELECT * FROM pelanggan WHERE id_pelanggan = $ubah ");
while ($tampil = mysqli_fetch_array($data)){
?>
    <form action="aksiubahpelanggan.php" method="post">
    <table>
        <tr>
            <td width="40">ID PELANGGAN :</td>
            <td>
                <input type="number" name = "id_pelanggan" value="<?php echo $tampil['id_pelanggan']?>">
            </td>
        </tr>
        <tr>
            <td width="60">NAMA :</td>
            <td>
                <input type="text" name="nama" value="<?php echo $tampil['nama'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">ALAMAT :</td>
            <td>
                <input type="text" name="alamat" value="<?php echo $tampil['alamat'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">NO TELEPON:</td>
            <td>
                <input type="text" name="no_telepon" value="<?php echo $tampil['no_telepon'];?>">
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
