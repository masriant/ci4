<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- Card1 -->
      <!-- Row1 -->
      <div class="row">
        <h1 class="bd-title">Blog Article</h1>
        <hr>
        <?php foreach ($komik as $m) : ?>
        <div class="col-sm-6 my-2">
          <!-- <div class="card"> -->
          <div class="card text-body bg-light">
            <div class="card-header bg-info">Event Selanjutnya</div>
            <div class="card-body">
              <h6 class="card-title"><?= $m['judul']; ?></h6>
              <small>By <?= $m['penerbit']; ?></small>
              <p class="card-text">Ditulis oleh : <?= $m['penulis']; ?>.</p>
              <a href="/home/<?= $m['slug']; ?>" class="btn btn-primary">Lanjut...</a>
            </div>
            <div class="card-footer text-muted">
              Post : <?= $m['created_at']; ?> Update : <?= $m['updated_at']; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div><!-- EndRow1 -->

      <!-- EndCard1 -->

    </div>
  </div>
</div>

<?= $this->endSection(); ?>