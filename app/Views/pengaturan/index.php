<h1> <?= $header['judul']; ?></h1>
<p>Motto kami <?= $header['motto']; ?></p>

<hr>

<form method="POST">
    <h3>Update Data</h3>
    <label for="judul">Judul Halaman :</label>
    <input type="text" id="judul" name="judul" value="<?= $header['judul']; ?>">
    <button id="submit" value="submit">Simpan</button>
</form>