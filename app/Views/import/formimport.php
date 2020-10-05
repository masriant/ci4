<?= $this->extend('import/viewimport'); ?>
<?= $this->section('forminput'); ?>
<div class="col-lg-12">
  <!-- card1  -->
  <div class="card my-3">
    <div class="card-body">
      <h5 class="card-title">Import Data Excel</h5>
      <!-- form1 -->
      <p>
        <?= form_open_multipart('import/upload') ?>
        <?= csrf_field() ?>
        <?php
        $session = \Config\Services::session();
        if (!empty($session->getFlashdata('pesan'))) {
          echo
            '<div class="alert alert-danger" role="alert">
            ' . $session->getFlashdata('pesan') . '
            </div>';
        }
        if (!empty($session->getFlashdata('sukses'))) {
          echo
            '<div class="alert alert-success" role="alert">
            ' . $session->getFlashdata('sukses') . '
            </div>';
        }
        ?>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Import Excel</label>
        <div class="col-sm-4">
          <input type="file" name="fileimport" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-4">
          <button type="submit" class="btn btn-outline-success btn-sm mt-3">Import Data</button>
        </div>
      </div>
      <?= form_close(); ?>
      </p>
      <!-- form#1 -->
    </div>
  </div>
  <!-- card#1 -->
  <?= $this->endSection(); ?>