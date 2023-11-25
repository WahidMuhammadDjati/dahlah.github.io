<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="kamar.php">kembali</a>
<h2>Edit kamar</h2>

<?php
include 'yaudahkamar.php';
$ubah = $_GET ['ubah'];
$data = mysqli_query($hah,"SELECT * FROM kamar WHERE id_kamar = $ubah ");
while ($tampil = mysqli_fetch_array($data)){
?>
    <form action="aksiubahkamar.php" method="post">
    <table>
        <tr>
            <td width="40">ID KAMAR :</td>
            <td>
                <input type="number" name = "id_kamar" value="<?php echo $tampil['id_kamar']?>">
            </td>
        </tr>
        <tr>
            <td width="60">JENIS KAMAR :</td>
            <td>
                <input type="text" name="jenis" value="<?php echo $tampil['jenis'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">HARGA KAMAR :</td>
            <td>
                <input type="text" name="harga" value="<?php echo $tampil['harga'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">STATUS KAMAR:</td>
            <td>
                <input type="text" name="status" value="<?php echo $tampil['status'];?>">
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
