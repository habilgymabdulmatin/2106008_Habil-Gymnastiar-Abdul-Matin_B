<?php
include './koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $judul = $_POST["judul"];
    $artist = $_POST["artist"];
    $album = $_POST["album"];
    $tanggal_ditambahkan = $_POST["tanggal_ditambahkan"];
    $durasi = $_POST["durasi"];

    $query = "INSERT INTO songlist(judul, artist, album, tanggal_ditambahkan, durasi) VALUES('$judul', '$artist', '$album', '$tanggal_ditambahkan', '$durasi' )";
    
    echo "<h2>Berhasil menambahkan lagu!</h2>";
    echo "<p>Judul: $judul</p>";
    echo "<p>Artis: $artist</p>";
    echo "<p>Album: $album</p>";
    echo "<p>Tanggal Ditambahkan: $tanggal_ditambahkan</p>";
    echo "<p>Durasi: $durasi</p>";

    (mysqli_query($koneksi, $query));

    echo '<br/><a href="index.php">Kembali</a>';
    header("refresh:10;url=http://localhost/uts_prakpweb/");
    exit();
} else {

    echo "Akses Ditolak";
}
?>