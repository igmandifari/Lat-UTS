<?php 

    $koneksi = mysqli_connect("localhost", "root", "", "utslat");
    if (mysqli_connect_errno()){
        trigger_error("Klneksi Gagal :" . mysqli_connect_error(), E_USER_ERROR);
    }

?>