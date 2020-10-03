<!-- Main content disini-->
<section class="content">

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pengguna</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <a href="<?= base_url('admin/users/create'); ?>" class="btn btn-outline-success btn-xs mb-2"><i
          class="fas fa-user-plus"> Tambah Data</i></a>

      <?php
      if (!empty(session()->getFlashdata('success'))) { ?>
      <div class="alert alert-success">
        <?= session()->getFlashdata('success'); ?>
      </div>
      <?php } ?>
      <table id="datauser1" class="table table-bordered table-striped">
        <?= csrf_field(); ?>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
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
            <td><?= $data['password']; ?></td>
            <td><?= $data['level']; ?></td>
            <td>
              <a href="<?= base_url('admin/users/edit/' . $data['id']); ?>" class="btn btn-outline-primary btn-xs"><i
                  class="fas fa-edit"> Edit</i></a>
              <a href="<?= base_url('admin/users/detail/' . $data['id']); ?>" class="btn btn-outline-info btn-xs"><i
                  class="fas fa-user-edit"> Detail</i></a>
              <a href="<?= base_url('admin/users/delete/' . $data['id']); ?>" class="btn btn-outline-danger btn-xs"
                onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"> Hapus</i></a>
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