<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row">
  <div class="col">
    <a href="/dashboard/create" class="btn btn-primary my-3">Tambah Data</a>
    <h3 class="mt-1">Daftar Peserta</h3>
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
        <?php $i = 1; ?>
        <?php foreach ($lakip as $k) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"> </td>
            <td><?= $k['judul']; ?></td>
            <td>
              <a href="/dashboard/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


<?= $this->endSection(); ?>