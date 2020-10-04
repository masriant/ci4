<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah User Data</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="<?= base_url('admin/users/save'); ?>" role="form" method="POST" enctype="multipart/form-data">
            <!-- <form action="<//?= base_url('admin/save'); ?>" role="form" method="POST" enctype="multipart/form-data"> -->
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                  id="nama" name="nama" placeholder="Nama Lengkap" autofocus>
                <div class="invalid-feedback">
                  <?= $validation->getError('nama'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                  id="username" name="username" placeholder="Username" autofocus>
                <div class="invalid-feedback">
                  <?= $validation->getError('username'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                  class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password"
                  name="password" placeholder="Password">
                <div class="invalid-feedback">
                  <?= $validation->getError('password'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="level">Select Level</label>
                <select class="form-control <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>" id="level"
                  name="level">
                  <div class="invalid-feedback">
                    <?= $validation->getError('level'); ?>
                  </div>
                  <option>Select Level</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
              <!-- <div class="form-group">
                <label for="InputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="InputFile">
                    <label class="custom-file-label" for="InputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                  </div>
                </div>
              </div>-->
              <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="Check1" required>
                <label class="form-check-label" for="Check1">Check me out</label>
              </div>
            </div> -->
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div><!-- /.card -->


      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /.content -->