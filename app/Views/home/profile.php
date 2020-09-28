<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- Card -->
      <div class="card-body">
        <h1 class="bd-title mb-3">Profile Team</h1>

        <main class="bd-content order-1 pl-lg-4">
          <div class="list-group mb-3">
            <?php foreach ($komik as $k) : ?>
            <a class="list-group-item list-group-item-action d-flex align-items-center" href="/home/<?= $k['slug']; ?>">
              <img src="/img/<?= $k['sampul']; ?>" alt="..." width="32" height="32" class="rounded mr-2" loading="lazy">
              <span>
                <strong><?= $k['judul']; ?></strong> @<?= $k['judul']; ?>
              </span></a>
            <?php endforeach; ?>
          </div>
        </main>
      </div>
      <!-- EndCard -->
    </div>
  </div>
</div>

<?= $this->endSection(); ?>