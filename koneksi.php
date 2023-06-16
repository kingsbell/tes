<?php
    // Database
    $koneksi = mysqli_connect("localhost","root","","db_SIPE2BARP");

    if(!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>