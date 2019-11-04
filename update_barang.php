<?php
include"koneksi.php";
$edit=mysqli_query($koneksi,"UPDATE tbarang SET 
nama_barang='$_POST[nama_barang]',
id_kategori='$_POST[id_kategori]',
satuan='$_POST[satuan]',
harga_beli='$_POST[harga_beli]',
harga_jual='$_POST[harga_jual]' WHERE id_barang='$_POST[id_barang]'");

if($edit){
header("location:tampil_barang.php");
}else{
echo"<p>Gagal menyimpan</p><a href='tampil_barang.php'>Kembali</a>";

}
?>