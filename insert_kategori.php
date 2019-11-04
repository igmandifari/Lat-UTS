<?php
include"koneksi.php";
$simpan=mysqli_query($koneksi,"INSERT INTO tkategori (nama_kategori) VALUES ('$_POST[nama_kategori]')");

if($simpan){
header("location:tampil_kategori.php");
}else{
echo"<p>Gagal menyimpan</p><a href='input_kategori.php'>Kembali</a>";

}
?>