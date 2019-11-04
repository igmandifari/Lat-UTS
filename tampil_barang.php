<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
    <h2 align="center">Data Barang</h2>
        <table align="center" width="900px" border="5px" class="table">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Aksi</th>
            <?php 
            require "koneksi.php";
            $i=0;
            $tampil=mysqli_query($koneksi, "SELECT * FROM tbarang");
            while ($data=mysqli_fetch_array($tampil)){
                $i++;
            
            ?>
            <tr>
                <td> <?= "$i"; ?> </td>
                <td> <?= "$data[nama_barang]"; ?> </td>
                <td> <?= "$data[satuan]"; ?> </td>
                <td> <?= "$data[harga_beli]"; ?> </td>
                <td> <?= "$data[harga_jual]"; ?> </td>
                <td>
                    <a href="edit_barang.php?id_barang=<?= $data['id_barang']?>"; >Edit |</a>
                    <a href="hapus_barang.php?id_barang=<?= $data['id_barang']?>";> Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table><br>
        <a href='index.php'>Kembali</a>

    </div>
    
</body>
</html>