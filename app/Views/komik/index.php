<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2">Daftar Komik</h1>
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
          <tr>
            <th scope="row">1</th>
            <td><img src="/img/01.jpg" alt="" class="sampul"> </td>
            <td>Masrianto</td>
            <td>
              <a href="" class="btn btn-success">Detail</a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>