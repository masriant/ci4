<?= view('Myth\Auth\Views\_message_block') ?>
<form action="<?= route_to('login'); ?>" method="POST" class="user">
  <?= csrf_field(); ?>
  <?php if($config->validFields ===('email')) : ?>
  <div class="form-group">
    <input type="email" class="form-control form-control-user <?php if(session['error']) ?>">
    <div class="invalid-feedback">
      <?= session('errors.login'); ?>
    </div>
  </div>
</form>