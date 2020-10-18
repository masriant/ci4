<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- card -->
      <h3 class="mt-2">Detail Anggota</h3>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/img/<?= $lakip['sampul']; ?>" alt="..." class="rounded sampul2">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $lakip['judul']; ?></h5>
              <p class="card-text"><b>Description :</b> <?= $lakip['description']; ?></p>
              <p class="card-text"><b>Penulis :</b> <?= $lakip['penulis']; ?></p>
              <p class="card-text"><small class="text-muted"><b>Penerbit : </b> <?= $lakip['penerbit']; ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Dibuat : </b> <?= $lakip['created_at']; ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Terakhir diubah : </b>
                  <?= $lakip['updated_at']; ?></small></p>
              <!-- row mb-3 -->
              <div class="row mb-3">
                <div class="col-md-10">
                  <a href="/data/edit/<?= $lakip['slug']; ?>" class="btn btn-warning">Edit</a>
                  <?= csrf_field(); ?>
                  <form action="/data/<?= $lakip['id']; ?>" method="POST" class="d-inline">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                  </form>
                  <a href="/data" class="btn btn-info">Back to Daftar</a>
                </div>
              </div>
              <!-- row mb-3 -->
            </div>
          </div>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
</div>

<?= $this->endSection(); ?>