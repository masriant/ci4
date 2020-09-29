<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="mt-3">Form Ubah Data</h2>
      <form action="/orang/update/<?= $orang['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $orang['slug']; ?>">
        <input type="hidden" name="sampulLama" value="<?= $orang['sampul']; ?>">
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
              id="nama" name="nama" autofocus value="<?= (old('nama')) ? old('nama') : $orang['nama'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('nama'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
              id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $orang['alamat'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('alamat'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-2">
            <img src="/img/<?= $orang['sampul']; ?>" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-6">
            <div class="form-file form-file-sm">
              <input type="file" class="form-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>"
                id="sampul" name="sampul" onchange="previewImg()">
              <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
              </div>
              <label class="form-file-label" for="Sampul">
                <span class="form-file-text"><?= $orang['sampul']; ?></span>
                <span class="form-file-button">Browse</span>
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-8">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
          </div>
        </div>
        <!--  -->
      </form>
      <!-- EndForm -->
    </div>
  </div>
</div>

<?= $this->endSection(); ?>