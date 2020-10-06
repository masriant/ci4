<?= $this->extend('import/viewimport'); ?>
<?= $this->section('view'); ?>
<div class="container">

  <h3 class="text-center text-danger">Halaman Hasil Import</h3>
  <table class="table table-hover display data" id="table_id">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Tempat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Level</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($eksport as $m => $row) { ?>
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
  <script>
  $(document).ready(function() {
    $('#table_id').DataTable();
  });

  // This file is required by the index.html file and will
  // be executed in the renderer process for that window.
  // All of the Node.js APIs are available in this process.
  window.$ = window.jquery = require('./node_modules/jquery');
  window.dt = require('./node_modules/datatables.net')();
  window.$('#table_id').DataTable();
  </script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('.data').DataTable();
  });
  </script>
  <script>
  $(document).ready(function() {
    $('#example').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "../server_side/scripts/server_processing.php"
    });
  });
  </script>
</div>
<?= $this->endSection(); ?>