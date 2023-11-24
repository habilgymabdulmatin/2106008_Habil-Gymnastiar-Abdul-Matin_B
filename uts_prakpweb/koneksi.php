<?php
 
    $koneksi = mysqli_connect("localhost","root", "", "2106008_habil");

    if (!$koneksi) {
        echo "<script>alert('koneksi database gagal')</script>";
    }

?>
