<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 class="mt-2">Daftar Peserta</h3>
      <form action="" method="POST">
        <div class="input-group mb-3">
          <a href="/komik/create" class="btn btn-outline-primary mr-2">Tambah Data</a>
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
      <!-- <a href="/komik/create" class="btn btn-primary my-3">Tambah Data</a> -->
      <!-- <h1 class="mt-1">Daftar Peserta</h1> -->
      <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
      <?php endif; ?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (3 * ($currentPage - 1)); ?>
          <?php foreach ($komik as $k) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"> </td>
            <td><?= $k['judul']; ?></td>
            <td>
              <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('masrianto', 'masrianto_pagination'); ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>