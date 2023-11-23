<!DOCTYPE html>
<html lang="en">

<head>
    <title>UTS Praktikum Pemrograman WEB</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="kotak">
        <h1>Form List Lagu Favorit</h1>
        <img 
            src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg"
            alt="Logo Spotify"
            height="200"
        />
        <br />
        <form action="./addlagu.php" method="post">
            <label for="judul">Judul</label>
            <input type="text" name="judul" maxlength="100" class="form-input" 
            placeholder="Masukkan Judul Lagu" required>

            <label for="artist">Artis</label>
            <input type="text" name="artist" maxlenght="100" class="form-input" 
            placeholder="Masukkan Nama Artis" required>

            <label for="album">Album</label>
            <input type="text" name="album" maxlength="100" class="form-input" 
            placeholder="Masukkan Nama Album" required>

            <label for="tanggal_ditambahkan">Tanggal Ditambahkan</label>
            <input type="date" name="tanggal_ditambahkan" class="form-input" required>

            <label for="durasi">Durasi Lagu (jam:menit:detik)</label>
            <input type="text" name="durasi" class="form-input" placeholder="00:00:00" required>
        
            <button type="submit" id="btn-submit">Tambahkan Lagu</button>
            <button type="reset" id="btn-cancel">Reset</button>
        </form>
    </div>    
</body>

</html>

