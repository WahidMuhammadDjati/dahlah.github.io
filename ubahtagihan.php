<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="tagihan.php">kembali</a>
<h2>Edit pelanggan</h2>

<?php
include 'yaudahtagihan.php';
$ubah = $_GET ['ubah'];
$data = mysqli_query($hah,"SELECT * FROM tagihan WHERE id_tagihan = $ubah ");
while ($tampil = mysqli_fetch_array($data)){
?>
    <form action="aksiubahtagihan.php" method="post">
    <table>
        <tr>
            <td width="40">ID TAGIHAN :</td>
            <td>
                <input type="number" name = "id_tagihan" value="<?php echo $tampil['id_tagihan']?>">
            </td>
        </tr>
        <tr>
            <td width="60">ID RESERVASI:</td>
            <td>
                <input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">TOTAL BIAYA :</td>
            <td>
                <input type="number" name="total_biaya" value="<?php echo $tampil['total_biaya'];?>">
            </td>
        </tr>
        <tr>
            <td width="60">STATUS PEMBAYARAN :</td>
            <td>
                <input type="text" name="status_pembayaran" value="<?php echo $tampil['status_pembayaran'];?>">
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
