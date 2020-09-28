<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h3 class="bd-title my-3">Contact Us</h3>
      <hr>
      <?php foreach ($alamat as $a) : ?>
      <ul>
        <li><?= $a['tipe']; ?></li>
        <li><?= $a['alamat']; ?></li>
        <li><?= $a['kota']; ?></li>
      </ul>
      <?php endforeach; ?>

    </div>
  </div>
</div>

<?= $this->endSection(); ?>