<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Baru</h2>
<form action="prosesinputreservasi.php" method="post">
        <table>
            <tr>
                <td width="40">ID Reservasi :</td>
                <td>
                    <input type="number" name = "id_reservasi">
                </td>
            </tr>
            <tr>
                <td width="60">ID Pelanggan :</td>
                <td>
                    <input type="number" name="id_pelanggan">
                </td>
            </tr>
            <tr>
                <td width="60">ID Kamar :</td>
                <td>
                    <input type="number" name="id_kamar">
                </td>
            </tr>
            <tr>
                <td width="60">Tanggal IN :</td>
                <td>
                    <input type="date" name="tanggal_in">
                </td>
            </tr>
            <tr>
                <td width="60">Tanggal OUT :</td>
                <td>
                    <input type="date" name="tanggal_out">
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