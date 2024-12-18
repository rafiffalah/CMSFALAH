<form action="<?= isset($konten) ? base_url('admin/konten/edit/' . $konten['foto']) : base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
  <!-- CSRF Token -->
  <?= csrf_field() ?>
  
  <!-- Input Judul -->
  <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="<?= isset($konten) ? $konten['judul'] : '' ?>" required>
  </div>
  
  <!-- Dropdown Kategori -->
  <div class="mb-3">
    <label for="id_kategori" class="form-label">Kategori</label>
    <select name="id_kategori" id="id_kategori" class="form-control" required>
      <?php foreach ($kategori as $aa) { ?>
        <option value="<?= $aa['id_kategori'] ?>" <?= isset($konten) && $konten['id_kategori'] == $aa['id_kategori'] ? 'selected' : '' ?>>
          <?= $aa['nama_kategori'] ?>
        </option>
      <?php } ?>
    </select>
  </div>
  
  <!-- Input Keterangan -->
  <div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <textarea class="form-control" id="keterangan" name="keterangan" rows="4" required><?= isset($konten) ? $konten['keterangan'] : '' ?></textarea>
  </div>
  
  <!-- Input Foto -->
  <div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" class="form-control" id="foto" name="foto" <?= isset($konten) ? '' : 'required' ?>>
    <?php if (isset($konten) && !empty($konten['foto'])) { ?>
      <small class="form-text text-muted">Foto saat ini: <strong><?= $konten['foto'] ?></strong></small><br>
      <img src="<?= base_url('upload/konten/' . $konten['foto']) ?>" alt="Foto Konten" width="150" class="mt-2">
    <?php } ?>
  </div>
  
  <!-- Tombol Submit -->
  <button type="submit" class="btn btn-primary"><?= isset($konten) ? 'Update' : 'Submit' ?></button>
</form>
