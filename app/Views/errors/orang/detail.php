<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- card -->
      <h2 class="mt-2">Detail Anggota</h2>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/img/<?= $orang['sampul']; ?>" alt="..." class="rounded sampul2">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $orang['nama']; ?></h5>
              <p class="card-text"><b>Alamat :</b> <?= $orang['alamat']; ?></p>
              <!-- <p class="card-text"><small class="text-muted"><b>Penerbit : </b> <//?= $orang['penerbit']; ?></small></p> -->
              <p class="card-text"><small class="text-muted"><b>Dibuat : </b> <?= $orang['created_at']; ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Terakhir diubah : </b>
                  <?= $orang['updated_at']; ?></small></p>
              <!-- row mb-3 -->
              <div class="row mb-3">
                <div class="col-md-10">
                  <a href="/orang/edit/<?= $orang['slug']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                  <?= csrf_field(); ?>
                  <form action="/orang/<?= $orang['id']; ?>" method="POST" class="d-inline">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger btn-sm"
                      onclick="return confirm('Apakah anda yakin?');">Delete</button>
                  </form>
                  <a href="/orang" class="btn btn-outline-info btn-sm">Back to Daftar</a>
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