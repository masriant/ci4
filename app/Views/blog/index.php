<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 class="mt-2">List Artikel</h3>
      <form action="" method="POST">
        <div class="input-group mb-3">
          <!-- <a href="/blog/create" class="btn btn-outline-primary btn-sm my-3">Tambah Artikel</a> -->
          <a href="/blog/create" class="btn btn-outline-primary mr-2">Tambah Artikel</a>
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
      <!-- <a href="/blog/create" class="btn btn-outline-primary btn-sm my-3">Tambah Data</a> -->
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
          <?php $i = 1 + (6 * ($currentPage - 1)); ?>
          <?php foreach ($blog as $b) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><img src="/img/<?= $b['sampul']; ?>" alt="" class="sampul"> </td>
            <td><?= $b['blog_title']; ?></td>
            <td>
              <a href="/blog/<?= $b['slug']; ?>" class="btn btn-outline-info btn-sm">Detail</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('blog', 'blog_pagination'); ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>