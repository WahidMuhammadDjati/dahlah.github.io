<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Baru</h2>
<form action="prosesinputtagihan.php" method="post">
        <table>
            <tr>
                <td width="40">ID Tagihan :</td>
                <td>
                    <input type="number" name = "id_tagihan">
                </td>
            </tr>
            <tr>
                <td width="60">ID Reservasi :</td>
                <td>
                    <input type="number" name="id_reservasi">
                </td>
            </tr>
            <tr>
                <td width="60">Total Biaya :</td>
                <td>
                    <input type="number" name="total_biaya">
                </td>
            </tr>
            <tr>
                <td width="60">Status Pembayaran :</td>
                <td>
                    <input type="text" name="status_pembayaran">
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
</html>