<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="/category/create" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <?php $i = 1; ?>
      <?php foreach ($lakip as $k) : ?>
        <div class="col-md-4">
          <h2><?= $i++; ?>. <?= $k['judul']; ?></h2>
          <p><?= $k['description']; ?>. </p>
          <p><a class="btn btn-secondary" href="/category/<?= $k['slug']; ?>" role="button">View details &raquo;</a></p>
        </div>
      <?php endforeach; ?>
      <!--  -->
    </div>

    <hr>

  </div> <!-- /container -->

</main>








<div class="row">
  <div class="col">
    <a href="/category/create" class="btn btn-primary my-3">Tambah Data</a>
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
              <a href="/category/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


<?= $this->endSection(); ?>