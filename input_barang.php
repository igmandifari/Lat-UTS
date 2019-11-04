<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Input Data Barang</h2>
    <form action="insert_barang.php" method="post">
    <table>
    <tr>
        <td>Nama Barang</td> 
        <td> :<input type="text" name="nama_barang"></td>
    </tr>
    <tr>
		<td>Kategori Barang </td>
		<td>: <select name="id_kategori">
				<?php
                include "koneksi.php";
                $tampil=mysqli_query($koneksi,"SELECT * FROM tkategori");
                while($data=mysqli_fetch_array($tampil)){
                ?>
                <option value="<?php echo"$data[id_kategori]"; ?>"><?php echo"$data[nama_kategori]"; ?></option>

                <?php } ?>
			</select>
			
		</td>
	</tr>
    <tr>
        <td>Satuan</td>
        <td>: <input type="text" name="satuan"></td>
    </tr>
    <tr>
        <td>Harga Beli</td>
        <td>: <input type="text" name="harga_beli"></td>
    </tr>
    <tr>
        <td>Harga Jual</td>
        <td>: <input type="text" name="harga_jual"></td>
    </tr>
    </table>
    
	<button type="reset" class="btn btn-warning">Reset</button>
    <button type="submit" class="btn btn-primary">Submit</button><br><br>

    <a href="index.php">Kembali</a>
    </form>
</body>
</html>