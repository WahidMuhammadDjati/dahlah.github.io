<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Baru</h2>
<form action="prosesinputpelanggan.php" method="post">
        <table>
            <tr>
                <td width="40">ID Pelanggan :</td>
                <td>
                    <input type="number" name = "id_pelanggan">
                </td>
            </tr>
            <tr>
                <td width="60">Nama :</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td width="60">Alamat :</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td width="60">NO Telepon:</td>
                <td>
                    <input type="number" name="no_telepon">
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