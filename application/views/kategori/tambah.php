<h2>Tambah kategori</h2>
<a href="<?= site_url('kategori'); ?> "kembali</a>
<br><br>

<form method="post" action="<?= site url('kategori/simpan'); ?>">
    <label>nama kategori</label><br>
    <input type="text" name="nama_kategori' required>
    <br><br>

    <button type="submit">Simpan</button>
    <button type="reset">reset</button>
    