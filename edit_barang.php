<?php
include "koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM tbarang inner join tkategori on tbarang.id_kategori=tkategori.id_kategori WHERE id_barang='$_GET[id_barang]'");
$data=mysqli_fetch_array($tampil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Input Barang</title>
</head>
<body>

<div class="container">
	<h2 align="center">Form Edit Barang</h2>
    <form action="update_barang.php " method="post">
    <table>
	<tr>
		<td>Nama Barang</td>
       <td> : <input type="hidden" name="id_barang" value="<?php echo"$data[id_barang]";?>"/>
		<input type="text" name="nama_barang" value="<?php echo"$data[nama_barang]";?>"/></td>
	</tr>
	<tr>
		<td>Kategori Barang</td>
		<td>: <select name="id_kategori">
			  <option value="<?php echo"$data[id_kategori]";?>"><?php echo"$data[nama_kategori]";?></option>
				<?php
        $tampil1=mysqli_query($koneksi,"SELECT * FROM tkategori");
        while($data1=mysqli_fetch_array($tampil1)){
        ?>
                    <option value="<?php echo"$data1[id_kategori]"; ?>"><?php echo"$data1[nama_kategori]"; ?></option>

        <?php } ?>
                    </select>
                    
                </td>
	</tr>

    <tr>
		<td>Satuan</td>
		<td>: <input type="text" name="satuan" value="<?php echo"$data[satuan]";?>"/></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td>: <input type="number" name="harga_beli" value="<?php echo"$data[harga_beli]";?>"/></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td>: <input type="number" name="harga_jual" value="<?php echo"$data[harga_jual]";?>"/></td>
	</tr>
	
	</table>
	<br>
	<button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button><br><br>
	<a href='index.php'>Kembali</a>
    </form>
	</div>
    

</body>
</html>