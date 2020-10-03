<!-- Main content disini-->
<section class="content">

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pengguna</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="datauser2" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($user as $key => $data) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['username']; ?></td>
            <td><?= $data['level']; ?></td>
            <td>
              <a href="" class="btn btn-outline-primary btn-xs"
                onclick="return confirm('Anda tidak mempunyai akses mengedit halaman ini, silahkan tekan batal.');"><i
                  class="fas fa-edit"> Edit</i></a>
              <a href="/dashboard/detail/<?= $data['slug']; ?>" class="btn btn-outline-info btn-xs"><i
                  class="fas fa-user-edit">
                  Detail</i></a>
              <!-- <a href="" class="btn btn-outline-danger btn-xs" onclick="return confirm('Apakah anda yakin?');"><i
                  class="fas fa-trash"> Hapus</i></a> -->
            </td>
          </tr>

          <?php }; ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section><!-- endkonten disini "content"  -->