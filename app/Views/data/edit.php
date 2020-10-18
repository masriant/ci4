<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="mt-3">Form Ubah Data</h2>
      <form action="/data/update/<?= $lakip['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $lakip['slug']; ?>">
        <input type="hidden" name="sampulLama" value="<?= $lakip['sampul']; ?>">
        <div class="row mb-3">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $lakip['judul'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('judul'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" id="description" name="description" value="<?= (old('description')) ? old('description') : $lakip['description'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('description'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $lakip['penulis'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('penulis'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $lakip['penerbit'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('penerbit'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-2">
            <img src="/img/<?= $lakip['sampul']; ?>" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-6">
            <div class="form-file form-file-sm">
              <input type="file" class="form-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
              <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
              </div>
              <label class="form-file-label" for="Sampul">
                <span class="form-file-text"><?= $lakip['sampul']; ?></span>
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