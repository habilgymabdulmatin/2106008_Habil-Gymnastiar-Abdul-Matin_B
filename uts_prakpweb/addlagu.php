<?php

include './koneksi.php';

    $judul = $_POST['judul'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $tanggal_ditambahkan = $_POST["tanggal_ditambahkan"];
    $durasi = $_POST["durasi"];

    $query = "INSERT INTO songlist(judul, artist, album, tanggal_ditambahkan, durasi) VALUES('$judul', '$artist', '$album', '$tanggal_ditambahkan', '$durasi' )";

    mysqli_query($koneksi, $query);

    header("Location: ./index.php");

?>