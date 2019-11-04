<?php
include"koneksi.php";
$hapus=mysqli_query($koneksi,"DELETE FROM tbarang WHERE id_barang='$_GET[id_barang]'");

if($hapus){
header("location:tampil_barang.php");
}else{
echo"<p>Gagal menghapus</p><a href='tampil_barang.php'>Kembali</a>";

}
?>