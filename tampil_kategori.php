<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 align="center">Data Kategori</h2>

	<table align="center" border="1px"; width="500px">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			
		</tr>
        <?php
        include "koneksi.php";
        $i=0;
        $tampil=mysqli_query($koneksi,"SELECT * FROM tkategori");
        while($data=mysqli_fetch_array($tampil)){
        $i++;
        ?>	
	    <tr>
		<td><?php echo"$i"; ?></td>
		<td><?php echo"$data[nama_kategori]"; ?></td>

	 </tr>
        <?php }?>
    </table>
    <a href="index.php">Kembali</a>
</body>
</html>
