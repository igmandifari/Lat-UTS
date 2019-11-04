<?php
include"koneksi.php";
$simpan=mysqli_query($koneksi,"INSERT INTO tbarang (nama_barang,id_kategori,satuan,harga_beli,harga_jual) VALUES ('$_POST[nama_barang]','$_POST[id_kategori]','$_POST[satuan]','$_POST[harga_beli]','$_POST[harga_jual]')");

if($simpan){
header("location:tampil_barang.php");
}else{
echo"<p>Gagal menyimpan</p><a href='input_barang.php'>Kembali</a>";

}
