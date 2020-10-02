<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- <h3><?= $title; ?>!</h3> -->
      <h3 class="h3 mt-4 text-gray-800"> <?= $title; ?></h3>

    </div>
  </div>
</div>

<!-- <//?= view('Myth\Auth\Views\_message_block') ?> -->

<?= $this->endSection(); ?>

<!-- <div class="container">
  <div class="row">
    <div class="col">
      <h1>Dashboard!</h1>

    </div>
  </div>
</div> -->