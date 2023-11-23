<!DOCTYPE html>
<html lang="en">

<head>
    <title>UTS Praktikum Pemrograman WEB</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="kotak">
        <h1>Form List Lagu Favorit</h1>
        <form action="./addlagu.php" method="post">
            <label for="judul">Judul</label>
            <input type="text" name="judul" maxlength="100" class="form-input" required>

            <label for="artist">Artis</label>
            <input type="text" name="artist" maxlenght="100" class="form-input" required>

            <label for="album">Album</label>
            <input type="text" name="album" maxlength="100" class="form-input" required>

            <label for="tanggal_ditambahkan">Tanggal Ditambahkan</label>
            <input type="date" name="tanggal_ditambahkan" class="form-input" required>

            <label for="durasi">Durasi Lagu (jam:menit:detik)</label>
            <input type="timelenght" name="durasi" class="form-input" title="Format yang benar: jam:menit:detik" required>
        
            <button type="submit" id="btn-submit">Tambahkan Lagu</button>
        </form>
    </div>    
</body>

</html>

