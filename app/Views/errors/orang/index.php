<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 class="mt-2">Daftar Alamat</h3>
      <form action="" method="POST">
        <div class="input-group mb-3">
          <!-- <a href="/orang/create" class="btn btn-outline-primary btn-sm my-3">Tambah Data</a> -->
          <a href="/orang/create" class="btn btn-outline-primary mr-2">Tambah Data</a>
          <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword"
            autocomplete="" autofocus>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
      <?php endif; ?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (6 * ($currentPage - 1)); ?>
          <?php foreach ($orang as $g) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <!-- <td><img src="/img/<//?= $g/['sampul']; ?>" alt="" class="sampul"> </td> -->
            <td><?= $g['nama']; ?></td>
            <td><?= $g['alamat']; ?></td>
            <td>
              <a href="/orang/<?= $g['slug']; ?>" class="btn btn-outline-success btn-sm">Detail</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('orang', 'orang_pagination'); ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>