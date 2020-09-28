<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- card -->
      <h1 class="bd-title mt-2">Blog Team</h1>
      <hr>
      <!-- <h2 class="mt-2 shadow p-3 my-5 bg-white rounded">Event yang akan datang</h2> -->
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/img/<?= $komik['sampul']; ?>" alt="..." class="rounded sampul2">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title shadow p-3 my-3 bg-white rounded"><?= $komik['judul']; ?></h5>
              <p class="card-text"><b>Penulis :</b> <?= $komik['penulis']; ?></p>
              <p class="card-text"><small class="text-muted"><b>Penerbit : </b> <?= $komik['penerbit']; ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Dibuat : </b> <?= $komik['created_at']; ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Terakhir diubah : </b>
                  <?= $komik['updated_at']; ?></small></p>
              <!-- row mb-3 -->
              <div class="row mb-3">
                <div class="col-md-10">
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                  <a href="/home/blog" class="btn btn-info">Back to Daftar</a>
                </div>
              </div>
              <!-- row mb-3 -->
            </div>
          </div>
        </div>
      </div>
      <!-- end card -->
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
          aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>