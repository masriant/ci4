<?= $this->extend('import/viewimport'); ?>
<?= $this->section('print'); ?>
<div class="container">
  <h3 class="text-center text-danger">Print Hasil Import</h3>
  <table class="table table-hover display data" id="table_id">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Tempat</th>
        <th>Jenis Kelamin</th>
        <th>Level</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($print as $m => $row) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['noreg']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['tmplahir']; ?></td>
        <td><?= $row['tgllahir']; ?></td>
        <td><?= $row['jenkel']; ?></td>
        <td><?= $row['reglevelid']; ?></td>
        <td><?= $row['foto']; ?></td>
      </tr>
      <?php }; ?>
    </tbody>
  </table>
  <script type="text/javascript">
  window.print();
  </script>
</div>
<?= $this->endSection(); ?>