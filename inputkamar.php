<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Baru</h2>
<form action="prosesinputkamar.php" method="post">
        <table>
            <tr>
                <td width="40">ID KAMAR :</td>
                <td>
                    <input type="number" name = "id_kamar">
                </td>
            </tr>
            <tr>
                <td width="60">JENIS KAMAR :</td>
                <td>
                    <input type="text" name="jenis">
                </td>
            </tr>
            <tr>
                <td width="60">HARGA KAMAR :</td>
                <td>
                    <input type="text" name="harga">
                </td>
            </tr>
            <tr>
                <td width="60">STATUS KAMAR:</td>
                <td>
                    <input type="text" name="status">
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