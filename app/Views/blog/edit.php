<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="mt-3">Form Ubah Data</h2>
      <form action="/blog/update/<?= $blog['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $blog['slug']; ?>">
        <input type="hidden" name="sampulLama" value="<?= $blog['sampul']; ?>">
        <div class="row mb-3">
          <label for="blog_title" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError('blog_title')) ? 'is-invalid' : ''; ?>"
              id="blog_title" name="blog_title" autofocus
              value="<?= (old('blog_title')) ? old('blog_title') : $blog['blog_title'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('blog_title'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="blog_description" class="col-sm-2 col-form-label">Artikel</label>
          <div class="col-sm-8">
            <input type="text"
              class="form-control <?= ($validation->hasError('blog_description')) ? 'is-invalid' : ''; ?>"
              id="blog_description" name="blog_description"
              value="<?= (old('blog_description')) ? old('blog_description') : $blog['blog_description'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('blog_description'); ?>
            </div>
          </div>
        </div>
        <!-- <div class="row mb-3">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <//?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>"
              id="penerbit" name="penerbit" value="<//?= (old('penerbit')) ? old('penerbit') : $blog['penerbit'] ?>">
            <div class="invalid-feedback">
              <//?= $validation->getError('penerbit'); ?>
            </div>
          </div>
        </div> -->
        <div class="row mb-3">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-2">
            <img src="/img/<?= $blog['sampul']; ?>" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-6">
            <div class="form-file form-file-sm">
              <input type="file" class="form-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>"
                id="sampul" name="sampul" onchange="previewImg()">
              <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
              </div>
              <label class="form-file-label" for="Sampul">
                <span class="form-file-text"><?= $blog['sampul']; ?></span>
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